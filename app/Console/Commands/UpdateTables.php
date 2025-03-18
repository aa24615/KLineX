<?php

namespace App\Console\Commands;


use App\Services\CreateTablesService;
use Illuminate\Console\Command;

/**
 * Class UpdateTables.
 *
 * @package App\Console\Commands
 *
 * @author 读心印 <aa24615@qq.com>
 */
class UpdateTables extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:tables';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '更新或初始化数据库';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $svc = new CreateTablesService();
        $svc->create();
    }
}
