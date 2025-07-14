<?php

namespace App\Services;

use App\Jobs\StockTimingAnalysisJobs;
use App\Jobs\StockTimingAnalysisListJobs;
use App\Jobs\StockTimingAnalysisTaskJobs;
use App\Models\StockRecord;
use App\Models\StockTimingAnalysis;
use App\Models\StockTimingAnalysisList;
use App\Models\StockTimingAnalysisTask;
use App\Services\Analysis\TimingService;
use App\Utils\ConsoleOutputUtil;
use Illuminate\Support\Facades\Redis;

class StockTimingAnalysisService
{

    public function create($percent,$market_capital)
    {
        $model = new StockTimingAnalysis();

        //条件
        $model->where = json_encode([
            ['market_capital', '>', $market_capital * 100000000],
        ]);

        $model->name = '市值大于100亿的股票分析';
        //开始分析时间
        $model->start_date = '2024-01-01';
        //分析样本组数
        $model->sample_number = 10;
        //随机抽几个股票
        $model->symbol_rand_number = 10;
        //涨到多少卖掉
        $model->percent = $percent;
        //最大交易次数
        $model->max_sell_count = 2;
        //总股本
        $model->equity = 100000;

        $model->save();

        ConsoleOutputUtil::info("创建分析:" . $model->id . " 市值大于1000亿的股票分析 100组");

        StockTimingAnalysisJobs::dispatch($model->id);
    }

    public function createTask($id)
    {
        $model = StockTimingAnalysis::query()->where('id', $id)->first();

        for ($i = 0; $i < $model->sample_number; $i++) {
            $task = new StockTimingAnalysisTask();
            $task->pid = $id;
            $task->save();

            ConsoleOutputUtil::info("创建分析组:" . $task->id . " 随机抽取" . $model->symbol_rand_number . "只股票");

            StockTimingAnalysisTaskJobs::dispatch($task->id);
        }

        return true;
    }

    public function countTask($id)
    {

        ConsoleOutputUtil::info('countTask');

        $model = StockTimingAnalysisTask::query()->with('analysis')->where('id', $id)->first();

        $key = 'task:'.$model->pid;

        Redis::incr($key,1);
        Redis::expire($key,    86400);

        $list = StockTimingAnalysisList::query()
            ->where('pid', $id)
            ->get();

        $profit = 0;
        $profit_equity = 0;
        $loss_equity = 0;
        $loss = 0;
        $equity = 0;
        $equity_amount = 0;

        foreach ($list as $val) {
            $amount = $val->balance + $val->market;

            $equity += $val->equity;
            $equity_amount += $amount;

            if ($amount > $val->equity) {
                $profit += $amount;
                $profit_equity += $val->equity;
            } else {
                $loss += $amount;
                $loss_equity += $val->equity;
            }
        }

        $model->profit_fee = $profit - $profit_equity;
        $model->loss_fee = $loss_equity - $loss;
        $model->profit_margin = round($profit / $profit_equity * 100 - 100, 2);
        $model->loss_margin = round(100 - $loss / $loss_equity * 100, 2);

        $model->total_fee = $equity_amount - $equity;
        $model->total_margin = round(($equity_amount / $equity) * 100 - 100, 2);
        $model->status = 1;

        if(!$model->save()){
            ConsoleOutputUtil::error('更新失败');
        }


        if(Redis::get($key)>=$model->analysis->sample_number){
            $this->countAnalysis($model->pid);
        }
    }

    public function countAnalysis(int $id){

        ConsoleOutputUtil::info('countAnalysis');


        $model = StockTimingAnalysis::query()->where('id',$id)->first();

        $list = StockTimingAnalysisTask::query()->where('pid',$id)->get();

        $listArray = $list->toArray();
        $total_fees = array_column($listArray,'total_fee');

        $min_fee = min($total_fees);
        $max_fee = max($total_fees);

        $total_fee = 0;
        foreach ($list as $item){
            $total_fee += $item->total_fee;
        }

        $model->total_fee = $total_fee/count($listArray);
        $model->total_min_fee = $min_fee;
        $model->total_max_fee = $max_fee;

        if(!$model->save()){
            ConsoleOutputUtil::error('更新失败');
        }

    }

    public function createList(int $task_id)
    {
        $data = StockTimingAnalysisTask::query()
            ->where('id', $task_id)
            ->with('analysis')
            ->first();

        $equity = $data->analysis->equity;
        $symbol_rand_number = $data->analysis->symbol_rand_number;
        $symbol_equity = round($equity / $symbol_rand_number, 2);

        $where = json_decode($data->where,true);

        $symbols = StockRecord::query()
            ->select(['symbol'])
            ->where($where)
            ->where('market', '=', 'CN')
            ->inRandomOrder()
            ->limit($symbol_rand_number)
            ->get();

        foreach ($symbols as $val) {
            $model = new StockTimingAnalysisList();
            $model->pid = $task_id;
            $model->symbol = $val->symbol;
            $model->equity = $symbol_equity;
            $model->balance = $symbol_equity;

            $model->save();

            ConsoleOutputUtil::info("分析组:" . $task_id . " 股票:" . $val->symbol);

            StockTimingAnalysisListJobs::dispatch($model->id);
        }




        return true;
    }

    public function analysis($id)
    {
        ConsoleOutputUtil::br();

        $data = StockTimingAnalysisList::query()
            ->where('id', $id)
            ->with('analysisTask.analysis')
            ->first();

        $key = 'analysis:' . $data->pid;

        Redis::incr($key,1);
        Redis::expire($key,    86400);

        $t = new TimingService();
        $t->setEquity($data->equity);
        $t->setPercent($data->analysisTask->analysis->percent);
        $t->setStartDate($data->analysisTask->analysis->start_date);
        $t->setMaxSellCount($data->analysisTask->analysis->percent);
        $result = $t->analyzeTiming($data->symbol);

        $data->balance = $result['equity'];
        $data->market = $result['market_value'];
        $data->save();

        ConsoleOutputUtil::br();

        //结整统计上游
        if(Redis::get($key)>=$data->analysisTask->analysis->symbol_rand_number){


            $this->countTask($data->pid);
        }
    }

}
