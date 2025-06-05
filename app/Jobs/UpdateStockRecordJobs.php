<?php

namespace App\Jobs;

use App\Services\StockRecordService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class UpdateStockRecordJobs implements ShouldQueue
{
    use Queueable;

    protected $data;
    /**
     * Create a new job instance.
     */
    public function __construct($symbol)
    {
        //
        $this->data = $symbol;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        $stockRecordService = new StockRecordService();
        $stockRecordService->updateSymbolAll($this->data);
    }
}
