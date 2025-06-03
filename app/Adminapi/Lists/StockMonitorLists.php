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
use App\Common\Model\StockMonitor;
use App\Common\Lists\ListsSearchInterface;


/**
 * StockMonitor列表
 * Class StockMonitorLists
 * @package App\Adminapi\Lists
 */
class StockMonitorLists extends BaseAdminDataLists implements ListsSearchInterface
{


    /**
     * @notes 设置搜索条件
     * @return \string[][]
     * @author likeadmin
     * @date 2025/05/10 00:13
     */
    public function setSearch(): array
    {
        return [
            '=' => ['status', 'complete'],
        ];
    }


    /**
     * @notes 获取列表
     * @return array
     * @author likeadmin
     * @date 2025/05/10 00:13
     */
    public function lists(): array
    {
        return StockMonitor::applySearchWhere($this->searchWhere)
            ->select(['id', 'where', 'cycle', 'notice', 'status', 'complete'])
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
     * @date 2025/05/10 00:13
     */
    public function count(): int
    {
        return StockMonitor::applySearchWhere($this->searchWhere)->count();
    }

}
