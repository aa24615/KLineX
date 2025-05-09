<?php

namespace App\Console\Commands;

use App\Common\Model\StockNotice;
use App\Models\StockRecord;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class ClearInvalidData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:clear_invalid_data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '清理无效的数据';

    /**
     * Execute the console command.
     */
    public function handle()
    {


        DB::table('telescope_entries')->delete();
        DB::table('telescope_entries_tags')->delete();
        DB::table('operation_log')->delete();
        DB::table('admin_session')->delete();
        DB::table('notice_setting')->delete();
        StockNotice::query()->delete();
        StockRecord::query()->delete();

        

        $this->info('清理完毕');
    }

}
