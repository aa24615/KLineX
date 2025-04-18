<?php

namespace App\Common\Model\User;

use App\Common\Model\BaseModel;

/**
 * 用户授权表
 *
 * @property int $id
 * @property int $user_id 用户id
 * @property string $openid 微信openid
 * @property string|null $unionid 微信unionid
 * @property int $terminal 客户端类型：1-微信小程序；2-微信公众号；3-手机H5；4-电脑PC；5-苹果APP；6-安卓APP
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAuth newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAuth newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAuth query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAuth whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAuth whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAuth whereOpenid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAuth whereTerminal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAuth whereUnionid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAuth whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAuth whereUserId($value)
 * @mixin \Eloquent
 */
class UserAuth extends BaseModel
{
    protected $table = 'user_auth';
}
