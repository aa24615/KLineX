<?php

namespace App\Services;

use App\Models\StockRecord;
use App\Utils\ConsoleOutputUtil;
use function Symfony\Component\String\b;

class StockTimingAnalysisService
{
    /**
     * 股票分析
     *
     * @param string $symbol 股票代码
     * @return array
     */
    public function analyzeTiming($symbol)
    {
        // 获取指定天数内的股票记录
        $records = StockRecord::query()
            ->select([
                'current',
                'date'
            ])
            ->where('symbol', $symbol)
            ->where('date', '>=', '2024-01-01')
            ->orderBy('date', 'asc')
            ->get();

        if ($records->isEmpty()) {
            return ['buy' => null, 'sell' => null];
        }


        //涨幅度
        $percent = 10;

        $list = [];


        //买入价格
        $buy = 0;
        //卖出价格
        $sell = 0;
        //股本
        $equity = 10000;
        //市值
        $market_value = 0;

        ConsoleOutputUtil::info('模拟交易: ' . $symbol . ' 幅度: ' . $percent . '% 股本:' . $equity);

        //init

        // 简单的低买高卖策略
        foreach ($records as $record) {
            $current = $record->current;
            $date = $record->date;

//            ConsoleOutputUtil::info('date:' . $date);

            if (empty($list)) {
                $list[] = [
                    'date' => $date,
                    'current' => $current,
                    'type' => 'buy',
                    'day' => 0,
                ];

                $buy = $current;
                $sell = $current * ((100 + $percent) / 100);
                $market_value = $equity;
                $equity = 0;

                ConsoleOutputUtil::info($date.' 买入: ' . $current );
                continue;
            }

            $end = $list[count($list) - 1];

            $list[count($list) - 1]['day'] +=1;

            $type = $end['type'];

            switch ($type) {
                case 'buy':
                    if ($current >= $sell) {
                        $list[] = [
                            'date' => $date,
                            'current' => $current,
                            'type' => 'sell',
                            'day' => 0,
                        ];
                        ConsoleOutputUtil::info($date.' 卖出: ' . $current .' 持股天数: '.$end['day']);


                        $equity = $market_value* ((100 + $percent) / 100);
                        $market_value = 0;
                    }
                    break;
                case 'sell':
                    if ($current <= $buy) {
                        $list[] = [
                            'date' => $date,
                            'current' => $current,
                            'type' => 'buy',
                            'day' => 0,
                        ];

                        ConsoleOutputUtil::info($date.' 买入: ' . $current);

                        $market_value = $equity;
                        $equity = 0;
                    }
                    break;
                default:

            }
        }


        ConsoleOutputUtil::info("当前价格 {$date} {$current}");

        ConsoleOutputUtil::info("结果 股本: {$equity} 市值: {$market_value}");



        print_r($list);

    }
}
