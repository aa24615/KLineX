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

namespace App\Adminapi\Logic;


use App\Common\Model\StockList;
use App\Common\Logic\BaseLogic;
use Illuminate\Support\Facades\DB;


/**
 * StockList逻辑
 * Class StockListLogic
 * @package App\Adminapi\Logic
 */
class StockListLogic extends BaseLogic
{


    /**
     * @notes 添加
     * @param array $params
     * @return bool
     * @author likeadmin
     * @date 2025/04/20 17:22
     */
    public static function add(array $params): bool
    {
        DB::beginTransaction();
        try {
            StockList::create([
                'symbol' => $params['symbol'],
                'code' => $params['code'],
                'exchange' => $params['exchange'],
                'market' => $params['market'],
                'name' => $params['name'],
                'chg' => $params['chg'],
                'current' => $params['current'],
                'current_year_percent' => $params['current_year_percent'],
                'percent' => $params['percent'],
                'volume' => $params['volume'],
                'amount' => $params['amount'],
                'turnover_rate' => $params['turnover_rate'],
                'pe_ttm' => $params['pe_ttm'],
                'dividend_yield' => $params['dividend_yield'],
                'market_capital' => $params['market_capital'],
                'float_market_capital' => $params['float_market_capital']
            ]);

            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            self::setError($e->getMessage());
            return false;
        }
    }


    /**
     * @notes 编辑
     * @param array $params
     * @return bool
     * @author likeadmin
     * @date 2025/04/20 17:22
     */
    public static function edit(array $params): bool
    {
        DB::beginTransaction();
        try {

            $model = StockList::findOrFail($params['id']);
            $model->fill([
                'symbol' => $params['symbol'],
                'code' => $params['code'],
                'exchange' => $params['exchange'],
                'market' => $params['market'],
                'name' => $params['name'],
                'chg' => $params['chg'],
                'current' => $params['current'],
                'current_year_percent' => $params['current_year_percent'],
                'percent' => $params['percent'],
                'volume' => $params['volume'],
                'amount' => $params['amount'],
                'turnover_rate' => $params['turnover_rate'],
                'pe_ttm' => $params['pe_ttm'],
                'dividend_yield' => $params['dividend_yield'],
                'market_capital' => $params['market_capital'],
                'float_market_capital' => $params['float_market_capital'],
                'updated_at' => $params['updated_at']
            ]);
            $model->save();

            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            self::setError($e->getMessage());
            return false;
        }
    }


    /**
     * @notes 删除
     * @param array $params
     * @return bool
     * @author likeadmin
     * @date 2025/04/20 17:22
     */
    public static function delete(array $params): bool
    {
        return StockList::destroy($params['id']);
    }


    /**
     * @notes 获取详情
     * @param $params
     * @return array
     * @author likeadmin
     * @date 2025/04/20 17:22
     */
    public static function detail($params): array
    {
        return StockList::findOrFail($params['id'])->toArray();
    }
}
