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



    public function setSortFields(){
        return [
            'id' => 'id',
            'symbol' => 'symbol',
            'code' => 'code',
            'exchange' => 'exchange',
            'market' => 'market',
            'name' => 'name',
            'chg' => 'chg',
            'current' => 'current',
            'current_year_percent' => 'current_year_percent',
            'percent' => 'percent',
            'volume' => 'volume',
            'amount' => 'amount',
            'turnover_rate' => 'turnover_rate',
            'pe_ttm' => 'pe_ttm',
            'dividend_yield' => 'dividend_yield',
            'market_capital' => 'market_capital',
            'float_market_capital' => 'float_market_capital',
            'updated_at' => 'updated_at',
        ];
    }

    public function setDefaultOrder(){
        return ['percent' => 'desc'];
    }

    /**
     * @notes 获取列表
     * @return array
     * @author likeadmin
     * @date 2025/04/20 17:22
     */
    public function lists(): array
    {


        $list =  StockList::applySearchWhere($this->searchWhere)
            ->select(['id', 'symbol', 'code', 'exchange', 'market', 'name', 'chg', 'current', 'current_year_percent', 'percent', 'volume', 'amount', 'turnover_rate', 'pe_ttm', 'dividend_yield', 'market_capital', 'float_market_capital', 'updated_at'])
            ->limit($this->limitLength)
            ->offset($this->limitOffset)
            ->applySortOrder($this->sortOrder)
            ->get()
            ->toArray();


        foreach ($list as &$item){
            $item['current'] = (float)$item['current'];
            $item['percent'] = (float)$item['percent'];
            $item['chg'] = (float)$item['chg'];
            $item['current_year_percent'] = (float)$item['current_year_percent'];
            $item['volume'] = (float)$item['volume'];
            $item['amount'] = (float)$item['amount'];
            $item['turnover_rate'] = (float)$item['turnover_rate'];
            $item['pe_ttm'] = (float)$item['pe_ttm'];
            $item['market_capital'] = (float)$item['market_capital'];
            $item['float_market_capital'] = (float)$item['float_market_capital'];
            $item['dividend_yield'] = (float)$item['dividend_yield'];
        }


        return $list;
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
