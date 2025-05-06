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
 * StockNotice验证器
 * Class StockNoticeValidate
 * @package App\Adminapi\Validate
 */
class StockNoticeValidate extends BaseValidate
{
    /**
     * 设置错误信息
     * @var string[]
     */
   protected $messages = [
        'id.required' => 'id不能为空',
        'type.required' => '通知类型不能为空',
        'status.required' => '是否启用不能为空',
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
                'type' => 'required',
                'status' => 'required',
            ],
            'edit' => [
                'id' => 'required',
                'type' => 'required',
                'status' => 'required',
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
