<?php

namespace App\Common\Model\User;

use App\Common\Enum\User\UserEnum;
use App\Common\Model\BaseModel;
use App\Common\Service\FileService;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 用户模型
 *
 * @property int $id 主键
 * @property int $sn 编号
 * @property string $avatar 头像
 * @property string $real_name 真实姓名
 * @property string $nickname 用户昵称
 * @property string $account 用户账号
 * @property string $password 用户密码
 * @property string $mobile 用户电话
 * @property int $sex 用户性别: [1=男, 2=女]
 * @property int $channel 注册渠道: [1-微信小程序 2-微信公众号 3-手机H5 4-电脑PC 5-苹果APP 6-安卓APP]
 * @property int $is_disable 是否禁用: [0=否, 1=是]
 * @property string $login_ip 最后登录IP
 * @property int $login_time 最后登录时间
 * @property int $is_new_user 是否是新注册用户: [1-是, 0-否]
 * @property string|null $user_money 用户余额
 * @property string|null $total_recharge_amount 累计充值
 * @property \Illuminate\Support\Carbon $create_time 创建时间
 * @property \Illuminate\Support\Carbon $update_time 更新时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property string $image
 * @property-read \App\Common\Model\User\UserAuth|null $userAuth
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereChannel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereIsDisable($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereIsNewUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLoginIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLoginTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRealName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereTotalRechargeAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUserMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutTrashed()
 * @mixin \Eloquent
 */
class User extends BaseModel
{
    protected $table = 'user';

    use SoftDeletes;

    protected function getDeletedAtColumn()
    {
        return 'delete_time';
    }

    /**
     * @notes 关联用户授权模型
     */
    public function userAuth()
    {
        return $this->hasOne(UserAuth::class, 'user_id');
    }

    /**
     * @notes 头像获取器 - 用于头像地址拼接域名
     */
    public function getAvatarAttribute($value)
    {
        return trim($value) ? FileService::getFileUrl($value) : '';
    }


    /**
     * @notes 获取器-性别描述
     */
    public function getSexAttribute($value)
    {
        return UserEnum::getSexDesc($value);
    }

    /**
     * @notes 登录时间
     */
    public function getLoginTimeAttribute($value)
    {
        return $value ? date('Y-m-d H:i:s', $value) : '';
    }

    /**
     * @notes 生成用户编码
     */
    public static function createUserSn($prefix = '', $length = 8)
    {
        $rand_str = '';
        for ($i = 0; $i < $length; $i++) {
            $rand_str .= mt_rand(1, 9);
        }
        $sn = $prefix . $rand_str;
        if (User::where(['sn' => $sn])->first()) {
            return self::createUserSn($prefix, $length);
        }
        return $sn;
    }


}
