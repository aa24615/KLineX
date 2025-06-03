<?php

namespace App\Console\Commands;

use App\Services\StockRecordService;
use App\Services\StockTimingAnalysisService;
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


        $s = new StockRecordService();
        $s->updateAll();



//        $T = new StockTimingAnalysisService();
//        $res = $T->analyzeTiming('SH600436',100);
//        var_dump($res);

//        $passwordSalt = Config::get('project.unique_identification');
//
//
//        echo create_password('admin', $passwordSalt);
//
//
//        dd(base_path(), storage_path('/'));
    }

}
