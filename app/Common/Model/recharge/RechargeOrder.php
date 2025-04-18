<?php

namespace App\Common\Model\Recharge;

use App\Common\Enum\PayEnum;
use App\Common\Model\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 充值订单模型
 *
 * @property int $id id
 * @property string $sn 订单编号
 * @property int $user_id 用户id
 * @property string|null $pay_sn 支付编号-冗余字段，针对微信同一主体不同客户端支付需用不同订单号预留。
 * @property int $pay_way 支付方式 2-微信支付 3-支付宝支付
 * @property int $pay_status 支付状态：0-待支付；1-已支付
 * @property int|null $pay_time 支付时间
 * @property string $order_amount 充值金额
 * @property int|null $order_terminal 终端
 * @property string|null $transaction_id 第三方平台交易流水号
 * @property int|null $refund_status 退款状态 0-未退款 1-已退款
 * @property string|null $refund_transaction_id 退款交易流水号
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property-read mixed $pay_status_text
 * @property-read mixed $pay_way_text
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereOrderAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereOrderTerminal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder wherePaySn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder wherePayStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder wherePayTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder wherePayWay($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereRefundStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereRefundTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder withoutTrashed()
 * @mixin \Eloquent
 */
class RechargeOrder extends BaseModel
{
    use SoftDeletes;

    protected $table = 'recharge_order';

    protected $appends = ['pay_way_text', 'pay_status_text'];

    protected function getDeletedAtColumn()
    {
        return 'delete_time';
    }

    /**
     * @notes 支付方式
     */
    public function getPayWayTextAttribute($value)
    {
        return PayEnum::getPayDesc($this->attributes['pay_way']);
    }

    /**
     * @notes 支付状态
     */
    public function getPayStatusTextAttribute($value)
    {
        return PayEnum::getPayStatusDesc($this->attributes['pay_status']);
    }
}
