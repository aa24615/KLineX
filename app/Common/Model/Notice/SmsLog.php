<?php

namespace App\Common\Model\Notice;

use App\Common\Model\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 短信记录模型
 *
 * @property int $id id
 * @property int $scene_id 场景id
 * @property string $mobile 手机号码
 * @property string $content 发送内容
 * @property string|null $code 发送关键字（注册、找回密码）
 * @property int|null $is_verify 是否已验证；0-否；1-是
 * @property int|null $check_num 验证次数
 * @property int $send_status 发送状态：0-发送中；1-发送成功；2-发送失败
 * @property int $send_time 发送时间
 * @property string|null $results 短信结果
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereCheckNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereIsVerify($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereResults($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereSceneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereSendStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereSendTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog withoutTrashed()
 * @mixin \Eloquent
 */
class SmsLog extends BaseModel
{
    protected $table = 'sms_log';

    use SoftDeletes;

    protected function getDeletedAtColumn()
    {
        return 'delete_time';
    }

}
