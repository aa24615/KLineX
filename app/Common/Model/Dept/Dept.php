<?php

namespace App\Common\Model\Dept;

use App\Common\Model\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 部门模型
 *
 * @property int $id id
 * @property string $name 部门名称
 * @property int $pid 上级部门id
 * @property int $sort 排序
 * @property string|null $leader 负责人
 * @property string|null $mobile 联系电话
 * @property int $status 部门状态（0停用 1正常）
 * @property \Illuminate\Support\Carbon $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 修改时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property-read string $status_desc
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept whereLeader($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept withoutTrashed()
 * @mixin \Eloquent
 */
class Dept extends BaseModel
{
    protected $table = 'dept';

    protected $appends = ['status_desc'];

    use SoftDeletes;

    protected function getDeletedAtColumn()
    {
        return 'delete_time';
    }

    /**
     * @notes 状态描述
     * @param $value
     * @param $data
     * @return string
     */
    public function getStatusDescAttribute()
    {
        return $this->attributes['status'] ? '正常' : '停用';
    }

}
