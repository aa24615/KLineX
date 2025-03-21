<?php

namespace App\Services;

use App\Models\StockList;
use App\Models\StockRecord;
use App\Utils\ConsoleOutputUtil;

class StockRecordService
{
    public function update(){
        $list = StockList::all();

        foreach ($list as $item) {


            if(StockRecord::whereSymbol($item->symbol)->where('date',$item->date)->first()){
                ConsoleOutputUtil::info('已存在记录: '.$item->symbol);
                continue;
            }

            $record = new StockRecord();

            // 使用循环或者手动设置每个属性
            foreach ($item->getAttributes() as $key => $value) {
                if(!in_array($key, ['id', 'created_at', 'updated_at'])){
                    $record->$key = $value;
                }
            }

            $record->date = date('Y-m-d');

            // 保存新记录
            $record->save();

            ConsoleOutputUtil::info('更新天级表: '.$item->symbol);
        }

    }
}
