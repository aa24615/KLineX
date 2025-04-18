<?php

namespace App\Common\Model\Auth;

use App\Common\Model\BaseModel;

/**
 * 
 *
 * @property int $id 主键
 * @property int $pid 上级菜单
 * @property string $type 权限类型: M=目录，C=菜单，A=按钮
 * @property string $name 菜单名称
 * @property string $icon 菜单图标
 * @property int $sort 菜单排序
 * @property string $perms 权限标识
 * @property string $paths 路由地址
 * @property string $component 前端组件
 * @property string $selected 选中路径
 * @property string $params 路由参数
 * @property int $is_cache 是否缓存: 0=否, 1=是
 * @property int $is_show 是否显示: 0=否, 1=是
 * @property int $is_disable 是否禁用: 0=否, 1=是
 * @property \Illuminate\Support\Carbon $create_time 创建时间
 * @property \Illuminate\Support\Carbon $update_time 更新时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemMenu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemMenu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemMenu query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemMenu whereComponent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemMenu whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemMenu whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemMenu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemMenu whereIsCache($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemMenu whereIsDisable($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemMenu whereIsShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemMenu whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemMenu whereParams($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemMenu wherePaths($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemMenu wherePerms($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemMenu wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemMenu whereSelected($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemMenu whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemMenu whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemMenu whereUpdateTime($value)
 * @mixin \Eloquent
 */
class SystemMenu extends BaseModel
{
    protected $table = 'system_menu';
}
