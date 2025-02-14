<?php

namespace App\Console\Commands;

use App\Services\StockListService;
use App\Services\StockRecordService;
use Illuminate\Console\Command;

/**
 * Class UpdateStockRecord.
 *
 * @package App\Console\Commands
 *
 * @author 读心印 <aa24615@qq.com>
 */
class UpdateStockRecord extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:stock_record';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '更新每天股票';

    /**
     * Execute the console command.
     */
    public function handle()
    {


        $stockListService = new StockRecordService();
        $stockListService->update();

        $this->info("ok");
    }
}
