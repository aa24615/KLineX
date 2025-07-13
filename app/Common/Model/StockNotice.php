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
 *
 * @package App\Common\Model
 * @property int $id
 * @property string|null $name 名称
 * @property string|null $type 通知类型，如email, dingtalk, wechat
 * @property array<array-key, mixed>|null $recipient 接收者，如邮箱地址、钉钉机器人URL等
 * @property string|null $content 通知内容模板
 * @property int $status 是否启用
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice whereRecipient($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice whereUpdatedAt($value)
 * @mixin \Eloquent
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
