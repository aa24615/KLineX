<?php

namespace App\Common\Model\Refund;

use App\Common\Enum\RefundEnum;
use App\Common\Model\BaseModel;

/**
 * 退款记录模型
 *
 * @property int $id id
 * @property string $sn 退款编号
 * @property int $user_id 关联用户
 * @property int $order_id 来源订单id
 * @property string $order_sn 来源单号
 * @property string|null $order_type 订单来源 order-商品订单 recharge-充值订单
 * @property string $order_amount 订单总的应付款金额，冗余字段
 * @property string $refund_amount 本次退款金额
 * @property string|null $transaction_id 第三方平台交易流水号
 * @property int $refund_way 退款方式 1-线上退款 2-线下退款
 * @property int $refund_type 退款类型 1-后台退款
 * @property int $refund_status 退款状态，0退款中，1退款成功，2退款失败
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property-read mixed $refund_status_text
 * @property-read mixed $refund_type_text
 * @property-read mixed $refund_way_text
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereOrderAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereOrderSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereOrderType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereRefundAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereRefundStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereRefundType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereRefundWay($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereUserId($value)
 * @mixin \Eloquent
 */
class RefundRecord extends BaseModel
{
    protected $table = 'refund_record';

    protected $appends = ['refund_type_text', 'refund_status_text', 'refund_way_text'];

    /**
     * @notes 退款类型描述
     */
    public function getRefundTypeTextAttribute($value)
    {
        return RefundEnum::getTypeDesc($this->attributes['refund_type']);
    }


    /**
     * @notes 退款状态描述
     */
    public function getRefundStatusTextAttribute($value)
    {
        return RefundEnum::getStatusDesc($this->attributes['refund_status']);
    }


    /**
     * @notes 退款方式描述
     */
    public function getRefundWayTextAttribute($value)
    {
        return RefundEnum::getWayDesc($this->attributes['refund_way']);
    }

}
