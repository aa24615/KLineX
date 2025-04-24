<?php
// +----------------------------------------------------------------------
// | likeadmin_laravel快速开发前后端分离管理后台
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | likeadmin项目：https://gitee.com/likeshop_gitee/likeadmin
// | likeadmin_laravel项目：https://github.com/1nFrastr/likeadmin_laravel
// | 独立开发者博客：https://www.sodair.top
// +----------------------------------------------------------------------
// | author: 1nFrastr x likeadminTeam
// +----------------------------------------------------------------------

namespace App\Common\Model;

use App\Common\Model\BaseModel;

/**
 * StockList模型
 * Class StockList
 *
 * @package App\Common\Model
 * @property int $id
 * @property string $market
 * @property string $symbol 股票代码
 * @property string $code 代码
 * @property string $exchange 交易所
 * @property string $type 股票类型
 * @property string $name 股票名称
 * @property int $chg 涨跌额
 * @property int $current 当前价
 * @property int $current_year_percent 年初至今-涨跌幅
 * @property int $percent 涨跌幅
 * @property int $volume 成交量
 * @property int $amount 成交额
 * @property int $turnover_rate 换手率
 * @property int $pe_ttm 市盈率(TTM)
 * @property int $dividend_yield 股息率
 * @property int $market_capital 总市值
 * @property int $float_market_capital 流通市值
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList query()
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereChg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereCurrent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereCurrentYearPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereDividendYield($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereExchange($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereFloatMarketCapital($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereMarket($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereMarketCapital($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList wherePeTtm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList wherePercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereTurnoverRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereVolume($value)
 * @mixin \Eloquent
 */
class StockList extends BaseModel
{

    protected $table = 'stock_list';

    protected $attributes = [
        'current' => 'integer'
    ];

}
