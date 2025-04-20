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
 * StockList验证器
 * Class StockListValidate
 * @package App\Adminapi\Validate
 */
class StockListValidate extends BaseValidate
{
    /**
     * 设置错误信息
     * @var string[]
     */
   protected $messages = [
        'id.required' => 'id不能为空',
        
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
                
            ],
            'edit' => [
                'id' => 'required',
                
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
