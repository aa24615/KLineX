<?php

namespace App\Services;

use App\Models\StockRecord;
use App\Utils\ConsoleOutputUtil;
use function Symfony\Component\VarExporter\Internal\f;

class StockTimingAnalysisService
{

    //涨幅
    protected int $percent = 100;
    //最大交易数
    protected int $max_sell_count = 2;
    protected int $equity = 10000;
    //历史数据
    protected array $records;

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

        $this->records = $records->toArray();

        if ($records->isEmpty()) {
            return ['buy' => null, 'sell' => null];
        }

        $list = [];

        $percent = $this->percent;

        //买入价格
        $buy = 0;
        //卖出价格
        $sell = 0;

        //卖出次数
        $sell_count = 0;
        //股本
        $equity = $this->equity;
        //市值
        $market_value = 0;

        ConsoleOutputUtil::info('模拟交易: ' . $symbol . ' 幅度: ' . $percent . '% 股本(现金):' . $equity);

        //init

        // 简单的低买高卖策略
        foreach ($records as $index => $record) {
            $current = $record->current;
            $date = $record->date;

            //超过最大卖出次数 不再交易
            if ($sell_count >= $this->max_sell_count) {
                ConsoleOutputUtil::info('卖出次数超过最大限制:' . $this->max_sell_count);
                break;
            }

            if (empty($list)) {
                $buy = $current; // 第一次买入价格
                $sell = $buy * ((100 + $percent) / 100);
                $market_value = $equity;
                $equity = 0;

                ConsoleOutputUtil::info($date . ' 蒙眼买: ' . $buy);
                $list[] = [
                    'date' => $date,
                    'current' => $current,
                    'type' => 'buy',
                    'day' => 0,
                ];
                continue;
            }

            $end = $list[count($list) - 1];

            $list[count($list) - 1]['day'] += 1;

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
                        ConsoleOutputUtil::info($date . ' 卖出: ' . $current . ' 持股天数: ' . $end['day']);

                        $sell_count++;

                        $equity = $market_value * ((100 + $percent) / 100);
                        $market_value = 0;
                    }
                    break;
                case 'sell':

                    // 动态计算买入价格
                    $isBuy = $this->calculateDynamicBuyPrice($index, $current);

                    if ($isBuy) {
                        $list[] = [
                            'date' => $date,
                            'current' => $current,
                            'type' => 'buy',
                            'day' => 0,
                        ];

                        ConsoleOutputUtil::info($date . ' 动态买入: ' . $current);

                        $buy = $current;
                        $sell = $buy * ((100 + $percent) / 100);

                        $market_value = $equity;
                        $equity = 0;
                    }
                    break;
                default:
            }
        }

        $market_value = round($market_value, 2);
        $equity = round($equity, 2);

        ConsoleOutputUtil::info("当前价格 {$date} {$current}");
        ConsoleOutputUtil::info("结果 现金: {$equity} 市值(未卖): {$market_value}");

        if ($market_value > 0) {
            if ($current > $buy) {
                $fee = ($equity - $this->equity);
                $profit = round($fee / $this->equity * 100, 2);

                ConsoleOutputUtil::info("利润: {$profit}% 金额: {$fee}");
            } else {
                $fee = ($buy - $current);
                $profit = round($fee / $current * 100, 2);

                $f = $market_value * $percent / 100;
                ConsoleOutputUtil::info("亏损: {$profit}%  金额: {$f}");
            }
        } else {
            $fee = ($equity - $this->equity);
            $profit = round($fee / $this->equity * 100, 2);

            ConsoleOutputUtil::info("利润: {$profit}% 金额: {$fee}");
        }
    }

    /**
     * 动态计算买入价格
     *
     * @param float $current 当前价格
     * @return float 动态买入价格
     */
    private function calculateDynamicBuyPrice($index, $current)
    {
        if ($index < 5) {
            return false;
        }

        // 取5天前价格
        $price = $this->records[$index - 5]['current'];

        // 如果跌幅大于某个值 则买入
        if (100 - ($current / $price * 100) >= $this->percent) {
            return true;
        }

        return false;
    }
}
