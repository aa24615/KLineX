<?php

namespace App\Jobs;

use App\Services\StockTimingAnalysisService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class StockTimingAnalysisListJobs  implements ShouldQueue
{
    use Queueable;

    protected $data;
    /**
     * Create a new job instance.
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $svc = new StockTimingAnalysisService();
        $svc->analysis($this->data);

    }
}
