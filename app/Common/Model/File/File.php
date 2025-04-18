<?php

namespace App\Common\Model\File;

use App\Common\Model\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 
 *
 * @property int $id 主键ID
 * @property int $cid 类目ID
 * @property int $source_id 上传者id
 * @property int $source 来源类型[0-后台,1-用户]
 * @property int $type 类型[10=图片, 20=视频]
 * @property string $name 文件名称
 * @property string $uri 文件路径
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereCid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereSourceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereUri($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File withoutTrashed()
 * @mixin \Eloquent
 */
class File extends BaseModel
{
    protected $table = 'file';

    use SoftDeletes;

    protected function getDeletedAtColumn()
    {
        return 'delete_time';
    }

}
