<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int|null $pid 父级id
 * @property int|null $symbol_rand_number 随机股票数
 * @property int|null $percent 涨幅
 * @property int|null $max_sell_count 最大卖出次数
 * @property int|null $equity 股本
 * @property int|null $profit_fee 利润金额
 * @property int|null $profit_margin 利润率
 * @property int|null $loss_fee 亏损金额
 * @property int|null $loss_margin 亏损率
 * @property int|null $total_fee 总盈亏金额
 * @property int|null $total_margin 总盈亏率
 * @property int|null $status 状态
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisTask newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisTask newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisTask query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisTask whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisTask whereEquity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisTask whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisTask whereLossFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisTask whereLossMargin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisTask whereMaxSellCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisTask wherePercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisTask wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisTask whereProfitFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisTask whereProfitMargin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisTask whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisTask whereSymbolRandNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisTask whereTotalFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisTask whereTotalMargin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysisTask whereUpdatedAt($value)
 * @property-read \App\Models\StockTimingAnalysis|null $analysis
 * @mixin \Eloquent
 */
class StockTimingAnalysisTask extends Model
{
    protected $table = 'stock_timing_analysis_task';

    protected $primaryKey = 'id';


    public function analysis(){
        return $this->hasOne(StockTimingAnalysis::class,'id','pid');
    }
}
