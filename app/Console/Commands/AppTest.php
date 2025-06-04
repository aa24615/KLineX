<?php

namespace App\Console\Commands;

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


        //        $s = new StockRecordService();
//        $s->updateAll();



        $T = new StockTimingAnalysisService();

        $list = [
            'SZ300613',
            'SZ002484',
            'SZ300170',
            'SZ002881',
            'SZ003021',
            'SZ302132',
            'SZ200055'
        ];

        foreach ($list as $symbol){
            $T->analyzeTiming($symbol);
            ConsoleOutputUtil::info('=================================================');
        }

//        $passwordSalt = Config::get('project.unique_identification');
//
//
//        echo create_password('admin', $passwordSalt);
//
//
//        dd(base_path(), storage_path('/'));
    }

}
