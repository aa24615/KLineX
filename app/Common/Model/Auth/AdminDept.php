<?php

namespace App\Common\Model\Auth;

use App\Common\Model\BaseModel;

/**
 * 
 *
 * @property int $admin_id 管理员id
 * @property int $dept_id 部门id
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminDept newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminDept newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminDept query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminDept whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminDept whereDeptId($value)
 * @mixin \Eloquent
 */
class AdminDept extends BaseModel
{
    protected $table = 'admin_dept';

    /**
     * @notes 删除用户关联部门
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
