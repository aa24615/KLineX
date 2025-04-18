<?php

namespace App\Common\Model\Auth;

use App\Common\Model\BaseModel;

/**
 * 
 *
 * @property int $admin_id 管理员id
 * @property int $role_id 角色id
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminRole query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminRole whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminRole whereRoleId($value)
 * @mixin \Eloquent
 */
class AdminRole extends BaseModel
{
    protected $table = 'admin_role';

    /**
     * @notes 删除用户关联角色
     * @param $adminId
     * @return bool
     * @author 段誉
     * @date 2022/11/25 14:14
     */
    public static function delByUserId($adminId)
    {
        return self::where(['admin_id' => $adminId])->delete();
    }

}
