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


namespace App\Adminapi\Controller;


use App\Adminapi\Controller\BaseAdminController;
use App\Adminapi\Lists\StockMonitorLists;
use App\Adminapi\Logic\StockMonitorLogic;
use App\Adminapi\Validate\StockMonitorValidate;


/**
 * StockMonitor控制器
 * Class StockMonitorController
 * @package App\Adminapi\Controller
 */
class StockMonitorController extends BaseAdminController
{


    /**
     * @notes 获取列表
     * @author likeadmin
     * @date 2025/05/10 00:13
     */
    public function lists()
    {
        return $this->dataLists(new StockMonitorLists());
    }


    /**
     * @notes 添加
     * @author likeadmin
     * @date 2025/05/10 00:13
     */
    public function add()
    {
        $params = (new StockMonitorValidate())->post()->goCheck('add');
        $result = StockMonitorLogic::add($params);
        if (true === $result) {
            return $this->success('添加成功', [], 1, 1);
        }
        return $this->fail(StockMonitorLogic::getError());
    }


    /**
     * @notes 编辑
     * @author likeadmin
     * @date 2025/05/10 00:13
     */
    public function edit()
    {
        $params = (new StockMonitorValidate())->post()->goCheck('edit');
        $result = StockMonitorLogic::edit($params);
        if (true === $result) {
            return $this->success('编辑成功', [], 1, 1);
        }
        return $this->fail(StockMonitorLogic::getError());
    }


    /**
     * @notes 删除
     * @author likeadmin
     * @date 2025/05/10 00:13
     */
    public function delete()
    {
        $params = (new StockMonitorValidate())->post()->goCheck('delete');
        StockMonitorLogic::delete($params);
        return $this->success('删除成功', [], 1, 1);
    }


    /**
     * @notes 获取详情
     * @author likeadmin
     * @date 2025/05/10 00:13
     */
    public function detail()
    {
        $params = (new StockMonitorValidate())->goCheck('detail');
        $result = StockMonitorLogic::detail($params);
        return $this->data($result);
    }


}
