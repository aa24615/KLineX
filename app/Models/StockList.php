<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $symbol 股票代码
 * @property string $code 代码
 * @property string $exchange 交易所
 * @property string $type 股票类型
 * @property string $name 股票名称
 * @property string $chg 涨跌额
 * @property string $current 当前价
 * @property string $current_year_percent 年初至今-涨跌幅
 * @property string $percent 涨跌幅
 * @property string $volume 成交量
 * @property string $amount 成交额
 * @property string $turnover_rate 换手率
 * @property string $pe_ttm 市盈率(TTM)
 * @property string $dividend_yield 股息率
 * @property string $market_capital 总市值
 * @property string $float_market_capital 流通市值
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereChg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereCurrent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereCurrentYearPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereDividendYield($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereExchange($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereFloatMarketCapital($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereMarketCapital($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList wherePeTtm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList wherePercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereTurnoverRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereVolume($value)
 * @mixin \Eloquent
 */
class StockList extends Model
{
    protected $table = 'stock_list';

}
