<?php

namespace App\Services;

use App\Jobs\UpdateStockRecordJobs;
use App\Models\StockList;
use App\Models\StockRecord;
use App\Utils\ConsoleOutputUtil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Zyan\StockApi\StockApi;

class StockRecordService
{
    public function update()
    {
        $list = StockList::all();

        foreach ($list as $item) {
            if (StockRecord::whereSymbol($item->symbol)->where('date', $item->date)->first()) {
                ConsoleOutputUtil::info('已存在记录: ' . $item->symbol);
                continue;
            }

            $record = new StockRecord();

            // 使用循环或者手动设置每个属性
            foreach ($item->getAttributes() as $key => $value) {
                if (!in_array($key, ['id', 'created_at', 'updated_at'])) {
                    $record->$key = $value;
                }
            }

            $record->date = date('Y-m-d');

            // 保存新记录
            $record->save();

            ConsoleOutputUtil::info('更新天级表: ' . $item->symbol);
        }
    }

    public function updateSymbolAll($symbol)
    {
        $xueQiu = StockApi::getXueqiu();

        $list = $xueQiu->getRecordsAll($symbol);

        //Log::info(print_r($list, true));

        $count =  count($list);

         ConsoleOutputUtil::info('更新: ' . $symbol . ' 共' . $count . '条数据');

        foreach ($list as $key => $item) {
            $date = date('Y-m-d', $item[0] / 1000);
            //ConsoleOutputUtil::info($date);

            if (StockRecord::whereSymbol($symbol)->where('date', $date)->first()) {
                //ConsoleOutputUtil::info('已存在记录: ' . $symbol);
                continue;
            }

            $record = new StockRecord();

            $record->market = '';
            $record->symbol = $symbol;
            $record->date = $date;
            $record->current = $item[3];
            $record->chg = $item[4];
            $record->percent = $item[5];
            $record->volume = (int)$item[6];
            $record->amount = (int)$item[7];
            $record->turnover_rate = (int)$item[8];


            $record->save();
        }
    }

    public function updateAll()
    {
        $list = StockList::query()->select(['symbol'])->where('exchange','sz')->orderByDesc('id')->get();
         ConsoleOutputUtil::info('更新: ' . count($list) . ' 个');
        foreach ($list as $val){
            UpdateStockRecordJobs::dispatch($val->symbol);
        }
    }
}
