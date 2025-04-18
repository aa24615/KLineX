<?php

namespace App\Common\Model\Auth;

use App\Common\Model\BaseModel;

/**
 * 
 *
 * @property int $admin_id 管理员id
 * @property int $jobs_id 岗位id
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminJobs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminJobs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminJobs query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminJobs whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminJobs whereJobsId($value)
 * @mixin \Eloquent
 */
class AdminJobs extends BaseModel
{
    protected $table = 'admin_jobs';

    /**
     * @notes 删除用户关联岗位
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
