<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $date 日期
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
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereChg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereCurrent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereCurrentYearPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereDividendYield($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereExchange($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereFloatMarketCapital($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereMarketCapital($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord wherePeTtm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord wherePercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereTurnoverRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereVolume($value)
 * @property string $market
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereMarket($value)
 * @mixin \Eloquent
 */
class StockRecord extends Model
{
    protected $table = 'stock_record';

    protected $primaryKey = 'id';
}
