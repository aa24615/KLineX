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

namespace App\Common\Model;


use App\Common\Model\BaseModel;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Casts\AsCollection;

/**
 * StockNotice模型
 * Class StockNotice
 * @package App\Common\Model
 */
class StockNotice extends BaseModel
{


    protected $table = 'stock_notice';

    public $timestamps = true;


    protected $dateFormat = 'Y-m-d H:i:s';

    public $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
        'recipient'  => 'array'
    ];


    public function getCreatedAtColumn()
    {
        return 'created_at';
    }

    public function getUpdatedAtColumn()
    {
        return 'updated_at';
    }

}
