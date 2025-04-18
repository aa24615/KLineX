<?php

namespace App\Common\Model;

/**
 * 
 *
 * @property int $id
 * @property string|null $type 类型
 * @property string $name 名称
 * @property string|null $value 值
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Config newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Config newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Config query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Config whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Config whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Config whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Config whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Config whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Config whereValue($value)
 * @mixin \Eloquent
 */
class Config extends BaseModel
{
    protected $table = 'config';
}
