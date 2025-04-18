<?php

namespace App\Common\Model\Notice;

use App\Common\Model\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 通知记录模型
 *
 * @property int $id ID
 * @property int $user_id 用户id
 * @property string $title 标题
 * @property string $content 内容
 * @property int|null $scene_id 场景
 * @property int|null $read 已读状态;0-未读,1-已读
 * @property int|null $recipient 通知接收对象类型;1-会员;2-商家;3-平台;4-游客(未注册用户)
 * @property int|null $send_type 通知发送类型 1-系统通知 2-短信通知 3-微信模板 4-微信小程序
 * @property int|null $notice_type 通知类型 1-业务通知 2-验证码
 * @property string|null $extra 其他
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereNoticeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereRecipient($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereSceneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereSendType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord withoutTrashed()
 * @mixin \Eloquent
 */
class NoticeRecord extends BaseModel
{
    protected $table = 'notice_record';

    use SoftDeletes;

    protected function getDeletedAtColumn()
    {
        return 'delete_time';
    }

}
