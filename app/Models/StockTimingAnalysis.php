<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string|null $name 名称
 * @property string|null $where 条件
 * @property string|null $start_date 开始日期
 * @property int|null $sample_number 分析样本组数
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
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis whereEquity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis whereLossFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis whereLossMargin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis whereMaxSellCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis wherePercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis whereProfitFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis whereProfitMargin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis whereSampleNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis whereSymbolRandNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis whereTotalFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis whereTotalMargin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockTimingAnalysis whereWhere($value)
 * @mixin \Eloquent
 */
class StockTimingAnalysis extends Model
{
    protected $table = 'stock_timing_analysis';

    protected $primaryKey = 'id';


}
