<?php

namespace App\Common\Model\Dict;

use App\Common\Model\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 字典类型模型
 *
 * @property int $id id
 * @property string $name 字典名称
 * @property string $type 字典类型名称
 * @property int $status 状态 0-停用 1-正常
 * @property string|null $remark 备注
 * @property \Illuminate\Support\Carbon $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 修改时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property-read mixed $status_desc
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType withoutTrashed()
 * @mixin \Eloquent
 */
class DictType extends BaseModel
{
    protected $table = 'dict_type';

    protected $appends = ['status_desc'];

    use SoftDeletes;

    protected function getDeletedAtColumn()
    {
        return 'delete_time';
    }

    /**
     * @notes 状态描述
     */
    public function getStatusDescAttribute($value)
    {
        return $this->attributes['status'] ? '正常' : '停用';
    }

}
