<?php

namespace App\Console\Commands;

use App\Models\StockList;
use App\Models\StockRecord;
use App\Services\StockRecordService;
use App\Services\StockTimingAnalysisService;
use App\Utils\ConsoleOutputUtil;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;

class AppTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '开发测试';

    /**
     * Execute the console command.
     */
    public function handle()
    {


        $T = new StockTimingAnalysisService();


        // 预先计算循环参数
        $marketCapitals = range(10, 10000, 10);  // 10, 20, ..., 990
        $percents = range(10, 10, 10);        // 10, 20, ..., 90
        $maxSellCounts = range(1, 1, 1);      // 1, 2, ..., 9

        foreach ($marketCapitals as $market_capital) {
            foreach ($percents as $percent) {
                foreach ($maxSellCounts as $max_sell_count) {
                    $T->create($percent, $market_capital, $max_sell_count);
                }
            }
        }




        exit;
//        $s = new StockRecordService();
//        $s->updateAll();
//
//        return;



        $T->setPercent(100);
        $T->setMaxSellCount(10);


        $list = StockList::query()
            ->select([
                'symbol',
                'name'
            ])
            ->where('market_capital','<',100*100000000)
            ->where('exchange','sz')
            ->orderByRaw('rand()')
            ->limit(10)
            ->get();


        $dec = 0;
        $inc = 0;

        foreach ($list as $key=>$item){

            $symbol = $item->symbol;
            $name = $item->name;

            ConsoleOutputUtil::info("{$key}---------------------$name------------------------");

            $result = $T->analyzeTiming($symbol);

            $dec += $result['dec'] ?? 0;
            $inc += $result['inc'] ?? 0;


        }


        ConsoleOutputUtil::info("--------------------------------------------------");
        echo "总亏损: {$dec}% 总盈利: {$inc}%";

        echo PHP_EOL;
        echo PHP_EOL;

//        $passwordSalt = Config::get('project.unique_identification');
//
//
//        echo create_password('admin', $passwordSalt);
//
//
//        dd(base_path(), storage_path('/'));
    }

}
