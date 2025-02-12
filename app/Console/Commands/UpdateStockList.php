<?php

namespace App\Console\Commands;

use App\Services\StockListService;
use Illuminate\Console\Command;

/**
 * Class UpdateStockList.
 *
 * @package App\Console\Commands
 *
 * @author 读心印 <aa24615@qq.com>
 */
class UpdateStockList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:stock_list {type}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '更新股票列表';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $type = $this->argument('type');

        $stockListService = new StockListService();
        $stockListService->update($type);

        $this->info("ok");
    }
}
