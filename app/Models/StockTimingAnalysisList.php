<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockTimingAnalysisList extends Model
{
    protected $table = 'stock_timing_analysis_list';

    protected $primaryKey = 'id';


    public function analysisTask(){
        return $this->hasOne(StockTimingAnalysisTask::class,'id','pid');
    }
}
