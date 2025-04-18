<?php

namespace App\Common\Model;

/**
 * 
 *
 * @property int $id 主键
 * @property string $name 关键词
 * @property int $sort 排序号
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HotSearch newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HotSearch newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HotSearch query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HotSearch whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HotSearch whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HotSearch whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HotSearch whereSort($value)
 * @mixin \Eloquent
 */
class HotSearch extends BaseModel
{
    protected $table = 'hot_search';
}
