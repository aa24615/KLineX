<?php

namespace App\Common\Model\Auth;

use App\Common\Model\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 
 *
 * @property int $id
 * @property string $name 名称
 * @property string $desc 描述
 * @property int|null $sort 排序
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property string $image
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Common\Model\Auth\SystemRoleMenu> $roleMenuIndex
 * @property-read int|null $role_menu_index_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemRole onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemRole query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemRole whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemRole whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemRole whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemRole whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemRole whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemRole whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemRole withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemRole withoutTrashed()
 * @mixin \Eloquent
 */
class SystemRole extends BaseModel
{
    use SoftDeletes;

    protected function getDeletedAtColumn()
    {
        return 'delete_time';
    }

    protected $table = 'system_role';

    /**
     * @notes 角色与菜单关联关系
     */
    public function roleMenuIndex()
    {
        return $this->hasMany(SystemRoleMenu::class, 'role_id');
    }
}
