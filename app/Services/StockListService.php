<?php

namespace App\Services;

use App\Models\StockList;
use Illuminate\Database\Eloquent\Model;
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
                'type' => 'hk',
                'exchange' => 'hk'
            ],
            'us' => [
                'market' => 'US',
                'type' => 'us',
                'exchange' => 'us'
            ],
            'sza' => [
                'market' => 'CN',
                'type' => 'sza',
                'exchange' => 'sz'
            ],
            'szb' => [
                'market' => 'CN',
                'type' => 'szb',
                'exchange' => 'sz'
            ],
            'sha' => [
                'market' => 'CN',
                'type' => 'sha',
                'exchange' => 'sh'
            ],
            'shb' => [
                'market' => 'CN',
                'type' => 'shb',
                'exchange' => 'sh'
            ],
        ];

        $typeValue = $types[$type]['type'];
        $marketValue = $types[$type]['market'];
        $exchangeValue = $types[$type]['exchange'];

        $data = $xueQiu->getListAll($marketValue,$typeValue);



        foreach ($data['list'] as $val){




            $stockList = StockList::query()->where('symbol',$val['symbol'])->first();

            if(!$stockList){
                $stockList = new StockList();
                $stockList->symbol = $val['symbol'];
            }

            $stockList->name = $val['name'];
            $stockList->code = $marketValue=='CN' ? (int)$val['symbol'] : $val['symbol'];
            $stockList->exchange = $exchangeValue;
            $stockList->type = $val['type'];
            $stockList->chg = $val['chg'];
            $stockList->current = $val['current'];
            $stockList->current_year_percent = $val['current_year_percent'];
            $stockList->percent = $val['percent'];
            $stockList->volume = (float)$val['volume'];
            $stockList->amount = (float)$val['amount'];
            $stockList->turnover_rate = $val['turnover_rate'];
            $stockList->pe_ttm = (float)$val['pe_ttm'];
            $stockList->dividend_yield = (float)$val['dividend_yield'];
            $stockList->market_capital = $val['market_capital'];
            $stockList->float_market_capital = $val['float_market_capital'];

            $stockList->save();
        }
    }
}

