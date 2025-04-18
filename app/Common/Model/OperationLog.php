<?php

namespace App\Common\Model;

use Illuminate\Support\Facades\Config;

/**
 * 
 *
 * @property int $id
 * @property int $admin_id 管理员ID
 * @property string $admin_name 管理员名称
 * @property string $account 管理员账号
 * @property string|null $action 操作名称
 * @property string $type 请求方式
 * @property string $url 访问链接
 * @property string|null $params 请求数据
 * @property string|null $result 请求结果
 * @property string $ip ip地址
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereAdminName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereParams($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereResult($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereUrl($value)
 * @mixin \Eloquent
 */
class OperationLog extends BaseModel
{
    protected $table = 'operation_log';

    public $casts = [
        'create_time' => 'datetime:Y-m-d H:i:s',
    ];

    protected $dateFormat = 'U';

    public $timestamps = false;

    protected function serializeDate(\DateTimeInterface $date)
    {
        return $date->timezone(Config::get('app.timezone'))->format('Y-m-d H:i:s');
    }
}
