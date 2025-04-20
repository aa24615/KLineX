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

namespace App\Adminapi\Lists;


use App\Adminapi\Lists\BaseAdminDataLists;
use App\Common\Model\StockList;
use App\Common\Lists\ListsSearchInterface;


/**
 * StockList列表
 * Class StockListLists
 * @package App\Adminapi\Lists
 */
class StockListLists extends BaseAdminDataLists implements ListsSearchInterface
{


    /**
     * @notes 设置搜索条件
     * @return \string[][]
     * @author likeadmin
     * @date 2025/04/20 17:22
     */
    public function setSearch(): array
    {
        return [
            '=' => ['code', 'exchange', 'market', 'updated_at'],
            '%like%' => ['name','symbol'],
            'between' => ['current', 'current_year_percent', 'percent', 'volume', 'amount', 'turnover_rate', 'pe_ttm', 'dividend_yield', 'market_capital', 'float_market_capital'],
        ];
    }


    /**
     * @notes 获取列表
     * @return array
     * @author likeadmin
     * @date 2025/04/20 17:22
     */
    public function lists(): array
    {
        return StockList::applySearchWhere($this->searchWhere)
            ->select(['id', 'symbol', 'code', 'exchange', 'market', 'name', 'chg', 'current', 'current_year_percent', 'percent', 'volume', 'amount', 'turnover_rate', 'pe_ttm', 'dividend_yield', 'market_capital', 'float_market_capital', 'updated_at'])
            ->limit($this->limitLength)
            ->offset($this->limitOffset)
            ->orderBy('id', 'desc')
            ->get()
            ->toArray();
    }


    /**
     * @notes 获取数量
     * @return int
     * @author likeadmin
     * @date 2025/04/20 17:22
     */
    public function count(): int
    {
        return StockList::applySearchWhere($this->searchWhere)->count();
    }

}
