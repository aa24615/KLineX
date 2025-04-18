<?php

namespace App\Common\Model\Decorate;

use App\Common\Model\BaseModel;

/**
 * 装修配置-页面
 *
 * @property int $id 主键
 * @property int $type 页面类型 1=商城首页, 2=个人中心, 3=客服设置 4-PC首页
 * @property string $name 页面名称
 * @property string|null $data 页面数据
 * @property string|null $meta 页面设置
 * @property \Illuminate\Support\Carbon $create_time 创建时间
 * @property \Illuminate\Support\Carbon $update_time 更新时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecoratePage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecoratePage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecoratePage query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecoratePage whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecoratePage whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecoratePage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecoratePage whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecoratePage whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecoratePage whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecoratePage whereUpdateTime($value)
 * @mixin \Eloquent
 */
class DecoratePage extends BaseModel
{
    protected $table = 'decorate_page';

}
