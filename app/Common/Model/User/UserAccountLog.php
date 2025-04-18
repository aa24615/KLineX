<?php

namespace App\Common\Model\User;

use App\Common\Model\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 账户流水记录模型
 *
 * @property int $id
 * @property string $sn 流水号
 * @property int $user_id 用户id
 * @property int $change_object 变动对象
 * @property int $change_type 变动类型
 * @property int $action 动作 1-增加 2-减少
 * @property string $change_amount 变动数量
 * @property string $left_amount 变动后数量
 * @property string|null $source_sn 关联单号
 * @property string|null $remark 备注
 * @property string|null $extra 预留扩展字段
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereChangeAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereChangeObject($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereChangeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereLeftAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereSourceSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog withoutTrashed()
 * @mixin \Eloquent
 */
class UserAccountLog extends BaseModel
{
    protected $table = 'user_account_log';

    use SoftDeletes;

    protected function getDeletedAtColumn()
    {
        return 'delete_time';
    }

}
