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

namespace App\Adminapi\Validate;

use App\Common\Validate\BaseValidate;

/**
 * StockMonitor验证器
 * Class StockMonitorValidate
 * @package App\Adminapi\Validate
 */
class StockMonitorValidate extends BaseValidate
{
    /**
     * 设置错误信息
     * @var string[]
     */
   protected $messages = [
        'id.required' => 'id不能为空',
        'where.required' => '监控条件不能为空',
        'cycle.required' => '周期不能为空',
        'notice.required' => '通知不能为空',
        'status.required' => '启用状态不能为空',
        'complete.required' => '是否完成不能为空',
   ];

    /**
     * 设置校验规则
     * @param $scene
     * @return array
     */
    public function rules($scene = '')
    {
        $rules = [
            'add' => [
                'where' => 'required',
                'cycle' => 'required',
                'notice' => 'required',
                'status' => 'required',
                'complete' => 'required',
            ],
            'edit' => [
                'id' => 'required',
                'where' => 'required',
                'cycle' => 'required',
                'notice' => 'required',
                'status' => 'required',
                'complete' => 'required',
            ],
            'detail' => [
                'id' => 'required',
            ],
            'delete' => [
                'id' => 'required',
            ],
        ];

        return $rules[$scene] ?? [];
    }

}
