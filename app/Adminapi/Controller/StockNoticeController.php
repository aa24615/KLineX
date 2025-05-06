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
use App\Adminapi\Lists\StockNoticeLists;
use App\Adminapi\Logic\StockNoticeLogic;
use App\Adminapi\Validate\StockNoticeValidate;


/**
 * StockNotice控制器
 * Class StockNoticeController
 * @package App\Adminapi\Controller
 */
class StockNoticeController extends BaseAdminController
{


    /**
     * @notes 获取列表
     * @author likeadmin
     * @date 2025/05/06 15:51
     */
    public function lists()
    {
        return $this->dataLists(new StockNoticeLists());
    }


    /**
     * @notes 添加
     * @author likeadmin
     * @date 2025/05/06 15:51
     */
    public function add()
    {
        $params = (new StockNoticeValidate())->post()->goCheck('add');
        $result = StockNoticeLogic::add($params);
        if (true === $result) {
            return $this->success('添加成功', [], 1, 1);
        }
        return $this->fail(StockNoticeLogic::getError());
    }


    /**
     * @notes 编辑
     * @author likeadmin
     * @date 2025/05/06 15:51
     */
    public function edit()
    {
        $params = (new StockNoticeValidate())->post()->goCheck('edit');
        $result = StockNoticeLogic::edit($params);
        if (true === $result) {
            return $this->success('编辑成功', [], 1, 1);
        }
        return $this->fail(StockNoticeLogic::getError());
    }


    /**
     * @notes 删除
     * @author likeadmin
     * @date 2025/05/06 15:51
     */
    public function delete()
    {
        $params = (new StockNoticeValidate())->post()->goCheck('delete');
        StockNoticeLogic::delete($params);
        return $this->success('删除成功', [], 1, 1);
    }


    /**
     * @notes 获取详情
     * @author likeadmin
     * @date 2025/05/06 15:51
     */
    public function detail()
    {
        $params = (new StockNoticeValidate())->goCheck('detail');
        $result = StockNoticeLogic::detail($params);
        return $this->data($result);
    }


}
