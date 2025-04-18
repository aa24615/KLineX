<?php

namespace App\Common\Model\Dict;

use App\Common\Model\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 字典数据模型
 *
 * @property int $id id
 * @property string $name 数据名称
 * @property string $value 数据值
 * @property int $type_id 字典类型id
 * @property string $type_value 字典类型
 * @property int|null $sort 排序值
 * @property int $status 状态 0-停用 1-正常
 * @property string|null $remark 备注
 * @property \Illuminate\Support\Carbon $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 修改时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property-read mixed $status_desc
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereTypeValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData withoutTrashed()
 * @mixin \Eloquent
 */
class DictData extends BaseModel
{
    protected $table = 'dict_data';

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
