<?php

namespace App\Common\Model\Refund;

use App\Common\Enum\RefundEnum;
use App\Common\Model\Auth\Admin;
use App\Common\Model\BaseModel;

/**
 * 退款日志模型
 *
 * @property int $id id
 * @property string|null $sn 编号
 * @property int $record_id 退款记录id
 * @property int $user_id 关联用户
 * @property int $handle_id 处理人id（管理员id）
 * @property string $order_amount 订单总的应付款金额，冗余字段
 * @property string $refund_amount 本次退款金额
 * @property int $refund_status 退款状态，0退款中，1退款成功，2退款失败
 * @property string|null $refund_msg 退款信息
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property-read mixed $handler
 * @property-read mixed $refund_status_text
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereHandleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereOrderAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereRecordId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereRefundAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereRefundMsg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereRefundStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereUserId($value)
 * @mixin \Eloquent
 */
class RefundLog extends BaseModel
{
    protected $table = 'refund_log';

    protected $appends = ['refund_status_text', 'handler'];

    /**
     * @notes 操作人描述
     */
    public function getHandlerAttribute($value)
    {
        return Admin::query()->where('id', $this->attributes['handle_id'])->value('name');
    }


    /**
     * @notes 退款状态描述
     */
    public function getRefundStatusTextAttribute($value)
    {
        return RefundEnum::getStatusDesc($this->attributes['refund_status']);
    }

}
