<?php

namespace App\Common\Model\Dept;

use App\Common\Model\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 岗位模型
 *
 * @property int $id id
 * @property string $name 岗位名称
 * @property string $code 岗位编码
 * @property int|null $sort 显示顺序
 * @property int $status 状态（0停用 1正常）
 * @property string|null $remark 备注
 * @property \Illuminate\Support\Carbon $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 修改时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property-read string $status_desc
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs withoutTrashed()
 * @mixin \Eloquent
 */
class Jobs extends BaseModel
{
    protected $table = 'jobs';

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
