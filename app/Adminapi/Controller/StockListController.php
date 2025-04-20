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
use App\Adminapi\Lists\StockListLists;
use App\Adminapi\Logic\StockListLogic;
use App\Adminapi\Validate\StockListValidate;


/**
 * StockList控制器
 * Class StockListController
 * @package App\Adminapi\Controller
 */
class StockListController extends BaseAdminController
{


    /**
     * @notes 获取列表
     * @author likeadmin
     * @date 2025/04/20 17:22
     */
    public function lists()
    {
        return $this->dataLists(new StockListLists());
    }


    /**
     * @notes 添加
     * @author likeadmin
     * @date 2025/04/20 17:22
     */
    public function add()
    {
        $params = (new StockListValidate())->post()->goCheck('add');
        $result = StockListLogic::add($params);
        if (true === $result) {
            return $this->success('添加成功', [], 1, 1);
        }
        return $this->fail(StockListLogic::getError());
    }


    /**
     * @notes 编辑
     * @author likeadmin
     * @date 2025/04/20 17:22
     */
    public function edit()
    {
        $params = (new StockListValidate())->post()->goCheck('edit');
        $result = StockListLogic::edit($params);
        if (true === $result) {
            return $this->success('编辑成功', [], 1, 1);
        }
        return $this->fail(StockListLogic::getError());
    }


    /**
     * @notes 删除
     * @author likeadmin
     * @date 2025/04/20 17:22
     */
    public function delete()
    {
        $params = (new StockListValidate())->post()->goCheck('delete');
        StockListLogic::delete($params);
        return $this->success('删除成功', [], 1, 1);
    }


    /**
     * @notes 获取详情
     * @author likeadmin
     * @date 2025/04/20 17:22
     */
    public function detail()
    {
        $params = (new StockListValidate())->goCheck('detail');
        $result = StockListLogic::detail($params);
        return $this->data($result);
    }


}
