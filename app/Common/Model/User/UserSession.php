<?php

namespace App\Common\Model\User;

use App\Common\Model\BaseModel;

/**
 * 用户登录token信息
 *
 * @property int $id
 * @property int $user_id 用户id
 * @property int $terminal 客户端类型：1-微信小程序；2-微信公众号；3-手机H5；4-电脑PC；5-苹果APP；6-安卓APP
 * @property string $token 令牌
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property int $expire_time 到期时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserSession newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserSession newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserSession query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserSession whereExpireTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserSession whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserSession whereTerminal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserSession whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserSession whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserSession whereUserId($value)
 * @mixin \Eloquent
 */
class UserSession extends BaseModel
{
    protected $table = 'user_session';

    public $timestamps = false;

}
