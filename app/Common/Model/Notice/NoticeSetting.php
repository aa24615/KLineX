<?php

namespace App\Common\Model\Notice;

use App\Common\Enum\DefaultEnum;
use App\Common\Enum\Notice\NoticeEnum;
use App\Common\Model\BaseModel;

/**
 * 
 *
 * @property int $id
 * @property int $scene_id 场景id
 * @property string $scene_name 场景名称
 * @property string $scene_desc 场景描述
 * @property int $recipient 接收者 1-用户 2-平台
 * @property int $type 通知类型: 1-业务通知 2-验证码
 * @property array $system_notice 系统通知设置
 * @property array $sms_notice 短信通知设置
 * @property array $oa_notice 公众号通知设置
 * @property array $mnp_notice 小程序通知设置
 * @property string $support 支持的发送类型 1-系统通知 2-短信通知 3-微信模板消息 4-小程序提醒
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property-read string $recipient_desc
 * @property-read string $sms_status_desc
 * @property-read string $type_desc
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereMnpNotice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereOaNotice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereRecipient($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereSceneDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereSceneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereSceneName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereSmsNotice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereSupport($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereSystemNotice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereUpdateTime($value)
 * @mixin \Eloquent
 */
class NoticeSetting extends BaseModel
{
    protected $table = 'notice_setting';

    protected $appends = [
        'sms_status_desc',
        'type_desc',
    ];

    /**
     * 短信通知状态
     *
     * @param mixed $value
     * @return string
     */
    public function getSmsStatusDescAttribute($value): string
    {
        if ($this->attributes['sms_notice']) {
            $smsText = json_decode($this->attributes['sms_notice'], true);
            return DefaultEnum::getEnableDesc($smsText['status']);
        }
        return '停用';
    }

    /**
     * 通知类型描述
     *
     * @param mixed $value
     * @return string
     */
    public function getTypeDescAttribute($value): string
    {
        return NoticeEnum::getTypeDesc($this->attributes['type']);
    }

    /**
     * 接收者描述获取器
     *
     * @param mixed $value
     * @return string
     */
    public function getRecipientDescAttribute($value): string
    {
        $desc = [
            1 => '买家',
            2 => '卖家',
        ];
        return $desc[$value] ?? '';
    }

    /**
     * 系统通知获取器
     *
     * @param mixed $value
     * @return array
     */
    public function getSystemNoticeAttribute($value): array
    {
        return empty($value) ? [] : json_decode($value, true);
    }

    /**
     * 短信通知获取器
     *
     * @param mixed $value
     * @return array
     */
    public function getSmsNoticeAttribute($value): array
    {
        return empty($value) ? [] : json_decode($value, true);
    }

    /**
     * 公众号通知获取器
     *
     * @param mixed $value
     * @return array
     */
    public function getOaNoticeAttribute($value): array
    {
        return empty($value) ? [] : json_decode($value, true);
    }

    /**
     * 小程序通知获取器
     *
     * @param mixed $value
     * @return array
     */
    public function getMnpNoticeAttribute($value): array
    {
        return empty($value) ? [] : json_decode($value, true);
    }
}
