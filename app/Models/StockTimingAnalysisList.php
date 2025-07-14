<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int|null $pid 父级id
 * @property string|null $symbol 股票代码
 * @property int|null $equity 股本
 * @property int|null $balance 余额
 * @property int|null $market 市值
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\StockTimingAnalysisTask|null $analysisTask
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisList query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisList whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisList whereEquity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisList whereMarket($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisList wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisList whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisList whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class StockTimingAnalysisList extends Model
{
    protected $table = 'stock_timing_analysis_list';

    protected $primaryKey = 'id';


    public function analysisTask(){
        return $this->hasOne(StockTimingAnalysisTask::class,'id','pid');
    }
}
