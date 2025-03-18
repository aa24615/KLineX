<?php

namespace App\Services;

use App\Models\StockList;
use App\Utils\ConsoleOutputUtil;
use Zyan\StockApi\StockApi;

class StockListService
{
    public function update($type)
    {

        StockApi::setConfig([
            'cache_path' => storage_path('framework/cache'),
        ]);
        $xueQiu = StockApi::getXueqiu();

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

        if(!isset($types[$type])){
            throw new \Exception('不支持的股票类型');
        }

        $typeValue = $types[$type]['type'];
        $marketValue = $types[$type]['market'];
        $exchangeValue = $types[$type]['exchange'];

        ConsoleOutputUtil::info('更新股票类型:'.$typeValue);

        $data = $xueQiu->getListAll($marketValue, $typeValue);

        ConsoleOutputUtil::br();

        foreach ($data['list'] as $val) {
            $stockList = StockList::query()->whereSymbol( $val['symbol'])->first();

            if (!$stockList) {
                $stockList = new StockList();
                $stockList->symbol = $val['symbol'];
            }

            $stockList->name = $val['name'];
            $stockList->code = $marketValue == 'CN' ? (int)$val['symbol'] : $val['symbol'];
            $stockList->exchange = $exchangeValue;
            $stockList->type = $val['type'];
            $stockList->chg = (float)$val['chg'];
            $stockList->current = (float)$val['current'];
            $stockList->current_year_percent = (float)$val['current_year_percent'];
            $stockList->percent = (float)$val['percent'];
            $stockList->volume = (float)$val['volume'];
            $stockList->amount = (float)$val['amount'];
            $stockList->turnover_rate = (float)$val['turnover_rate'];
            $stockList->pe_ttm = (float)$val['pe_ttm'];
            $stockList->dividend_yield = (float)$val['dividend_yield'];
            $stockList->market_capital = (float)$val['market_capital'];
            $stockList->float_market_capital = (float)$val['float_market_capital'];
            $stockList->save();

            ConsoleOutputUtil::info('更新股票:'.$val['symbol']);
        }

        ConsoleOutputUtil::br();
        ConsoleOutputUtil::info('本次更新数量:'.$data['count']);

    }
}

