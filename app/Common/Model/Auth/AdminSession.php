<?php

namespace App\Common\Model\Auth;

use App\Common\Model\BaseModel;

/**
 * 
 *
 * @property int $id
 * @property int $admin_id 用户id
 * @property int $terminal 客户端类型：1-pc管理后台 2-mobile手机管理后台
 * @property string $token 令牌
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property int $expire_time 到期时间
 * @property-read \App\Common\Model\Auth\Admin|null $admin
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminSession newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminSession newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminSession query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminSession whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminSession whereExpireTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminSession whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminSession whereTerminal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminSession whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminSession whereUpdateTime($value)
 * @mixin \Eloquent
 */
class AdminSession extends BaseModel
{
    protected $table = 'admin_session';

    public $timestamps = false;

    /**
     * @notes 关联管理员表
     */
    public function admin()
    {
        return $this->hasOne(Admin::class, 'id', 'admin_id');
    }
}
