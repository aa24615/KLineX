<?php

namespace App\Services;

use App\Jobs\StockTimingAnalysisJobs;
use App\Jobs\StockTimingAnalysisTaskJobs;
use App\Models\StockRecord;
use App\Models\StockTimingAnalysis;
use App\Models\StockTimingAnalysisList;
use App\Models\StockTimingAnalysisTask;
use App\Utils\ConsoleOutputUtil;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\HttpKernel\Log\record;
use function Symfony\Component\VarExporter\Internal\f;

class StockTimingAnalysisService
{




    public function create()
    {

        $model = new StockTimingAnalysis();

        $model->where = json_encode([
            ['market_capital' ,'>', 1000*100000000]
        ]);
        $model->name = '市值大于1000亿的股票分析';
        $model->start_date = '2025-01-01';
        $model->sample_number = 10;
        $model->symbol_rand_number = 10;
        $model->percent = 10;
        $model->max_sell_count = 2;
        $model->equity = 100000;

        $model->save();

        StockTimingAnalysisJobs::dispatchSync($model->id);
    }

    public function createTask($aid)
    {

        $model = StockTimingAnalysis::query()->where('id',$aid)->first();

        for ($i = 0; $i < $model->sample_number; $i++) {
            $task = new StockTimingAnalysisTask();
            $task->pid = $aid;
            $task->save();

            StockTimingAnalysisTaskJobs::dispatchSync($task->id);
        }

        return true;
    }

    public function createList(int $task_id)
    {


        $data = StockTimingAnalysisTask::query()
            ->where('id', $task_id)
            ->with('analysis')
            ->first();

        $equity = $data->equity;
        $symbol_rand_number = $data->analysis->symbol_rand_number;
        $symbol_equity = round($equity/$symbol_rand_number,2);


        $symbols = StockRecord::query()
            ->select(['symbol'])
            ->where('market_capital', '>', 1000*100000000)
            ->where('market', '=', 'CN')
            ->inRandomOrder()
            ->limit($symbol_rand_number)
            ->get();


        foreach ($symbols as $val){

            $model = new StockTimingAnalysisList();
            $model->pid = $task_id;
            $model->symbol = $val->symbol;
            $model->equity = $symbol_equity;
            $model->balance = $symbol_equity;
            $model->save();

        }

        return true;
    }



}
