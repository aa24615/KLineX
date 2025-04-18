<?php

namespace App\Common\Model\File;

use App\Common\Model\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 
 *
 * @property int $id 主键ID
 * @property int $pid 父级ID
 * @property int $type 类型[10=图片，20=视频，30=文件]
 * @property string $name 分类名称
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate withoutTrashed()
 * @mixin \Eloquent
 */
class FileCate extends BaseModel
{
    protected $table = 'file_cate';

    use SoftDeletes;

    protected function getDeletedAtColumn()
    {
        return 'delete_time';
    }

}
