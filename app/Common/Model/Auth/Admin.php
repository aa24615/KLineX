<?php

namespace App\Common\Model\Auth;

use App\Common\Enum\YesNoEnum;
use App\Common\Model\BaseModel;
use App\Common\Service\FileService;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 
 *
 * @property int $id
 * @property int $root 是否超级管理员 0-否 1-是
 * @property string $name 名称
 * @property string $avatar 用户头像
 * @property string $account 账号
 * @property string $password 密码
 * @property string $login_time 最后登录时间
 * @property string|null $login_ip 最后登录ip
 * @property int|null $multipoint_login 是否支持多处登录：1-是；0-否；
 * @property int|null $disable 是否禁用：0-否；1-是；
 * @property \Illuminate\Support\Carbon $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 修改时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Common\Model\Auth\AdminDept> $departments
 * @property-read int|null $departments_count
 * @property-read array $dept_id
 * @property-read string $disable_desc
 * @property-read array $jobs_id
 * @property-read array $role_id
 * @property string $image
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Common\Model\Auth\AdminJobs> $jobs
 * @property-read int|null $jobs_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Common\Model\Auth\AdminRole> $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereDisable($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereLoginIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereLoginTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereMultipointLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereRoot($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin withoutTrashed()
 * @mixin \Eloquent
 */
class Admin extends BaseModel
{
    protected $table = 'admin';

    use SoftDeletes;

    protected function getDeletedAtColumn()
    {
        return 'delete_time';
    }

    protected $appends = [
        'role_id',
        'dept_id',
        'jobs_id',
        'disable_desc',
    ];

    /**
     * @notes 关联角色id
     * @return array
     */
    public function getRoleIdAttribute()
    {
        return $this->roles()->pluck('role_id')->toArray();
    }

    /**
     * @notes 关联部门id
     * @return array
     */
    public function getDeptIdAttribute()
    {
        return $this->departments()->pluck('dept_id')->toArray();
    }

    /**
     * @notes 关联岗位id
     * @return array
     */
    public function getJobsIdAttribute()
    {
        return $this->jobs()->pluck('jobs_id')->toArray();
    }

    /**
     * @notes 获取禁用状态描述
     * @return string
     */
    public function getDisableDescAttribute()
    {
        return YesNoEnum::getDisableDesc($this->attributes['disable']);
    }

    /**
     * @notes 最后登录时间获取器 - 格式化：年-月-日 时:分:秒
     * @return string
     */
    public function getLoginTimeAttribute()
    {
        return empty($this->attributes['login_time']) ? '' : date('Y-m-d H:i:s', $this->attributes['login_time']);
    }

    /**
     * @notes 头像获取器 - 头像路径添加域名
     * @return string
     */
    public function getAvatarAttribute()
    {
        return empty($this->attributes['avatar'])
            ? FileService::getFileUrl(config('project.default_image.admin_avatar'))
            : FileService::getFileUrl(trim($this->attributes['avatar'], '/'));
    }

    /**
     * 角色关系
     */
    public function roles()
    {
        return $this->hasMany(AdminRole::class, 'admin_id');
    }

    /**
     * 部门关系
     */
    public function departments()
    {
        return $this->hasMany(AdminDept::class, 'admin_id');
    }

    /**
     * 岗位关系
     */
    public function jobs()
    {
        return $this->hasMany(AdminJobs::class, 'admin_id');
    }


}
