<?php

namespace App\Common\Model\Channel;

use App\Common\Model\BaseModel;

/**
 * 微信公众号回复
 *
 * @property int $id
 * @property string $name 规则名称
 * @property string $keyword 关键词
 * @property int $reply_type 回复类型 1-关注回复 2-关键字回复 3-默认回复
 * @property int $matching_type 匹配方式：1-全匹配；2-模糊匹配
 * @property int $content_type 内容类型：1-文本
 * @property string $content 回复内容
 * @property int $status 启动状态：1-启动；0-关闭
 * @property int $sort 排序
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property int|null $delete_time 删除时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereContentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereKeyword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereMatchingType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereReplyType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereUpdateTime($value)
 * @mixin \Eloquent
 */
class OfficialAccountReply extends BaseModel
{
    protected $table = 'official_account_reply';
}
