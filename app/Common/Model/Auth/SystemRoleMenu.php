<?php

namespace App\Common\Model\Auth;

use App\Common\Model\BaseModel;

/**
 * 
 *
 * @property int $role_id 角色ID
 * @property int $menu_id 菜单ID
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemRoleMenu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemRoleMenu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemRoleMenu query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemRoleMenu whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SystemRoleMenu whereRoleId($value)
 * @mixin \Eloquent
 */
class SystemRoleMenu extends BaseModel
{
    protected $table = 'system_role_menu';
}
