<?php

namespace App\Services;

use App\Models\StockList;
use Zyan\StockApi\StockApi;

class StockListService
{
    public function update($type)
    {
        $stockApi = new StockApi();
        $xueQiu = $stockApi->getXueQiuApi();

        $types = [
            'hk' => [
                'market' => 'HK',
                'type' => 'hk'
            ],
            'us' => [
                'market' => 'US',
                'type' => 'us'
            ],
            'sza' => [
                'market' => 'CN',
                'type' => 'sza'
            ],
            'szb' => [
                'market' => 'CN',
                'type' => 'szb'
            ],
            'sha' => [
                'market' => 'CN',
                'type' => 'sha'
            ],
            'shb' => [
                'market' => 'CN',
                'type' => 'shb'
            ],
        ];

        $typeValue = $types[$type]['type'];
        $marketValue = $types[$type]['market'];

        $data = $xueQiu->getListAll($marketValue,$typeValue);

        foreach ($data['list'] as $val){
            $stockList = new StockList();
            $stockList->symbol = $val['symbol'];
            //...
            $stockList->save();
        }
    }
}
