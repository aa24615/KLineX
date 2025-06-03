<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Common\Model\Article{
/**
 * 资讯管理模型
 *
 * @property int $id 文章id
 * @property int $cid 文章分类
 * @property string $title 文章标题
 * @property string|null $desc 简介
 * @property string|null $abstract 文章摘要
 * @property string $image 文章图片
 * @property string|null $author 作者
 * @property array|string|string[]|null $content 文章内容
 * @property int|null $click_virtual 虚拟浏览量
 * @property int|null $click_actual 实际浏览量
 * @property int $is_show 是否显示:1-是.0-否
 * @property int|null $sort 排序
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property-read string $cate_name
 * @property-read mixed $click
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereAbstract($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereCid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereClickActual($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereClickVirtual($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereIsShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article withoutTrashed()
 * @mixin \Eloquent
 */
	class Article extends \Eloquent {}
}

namespace App\Common\Model\Article{
/**
 * 资讯分类管理模型
 *
 * @property int $id 文章分类id
 * @property string|null $name 分类名称
 * @property int|null $sort 排序
 * @property int|null $is_show 是否显示:1-是;0-否
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Common\Model\Article\Article> $article
 * @property-read int $article_count
 * @property-read string $is_show_desc
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCate onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCate query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCate whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCate whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCate whereIsShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCate whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCate whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCate withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCate withoutTrashed()
 * @mixin \Eloquent
 */
	class ArticleCate extends \Eloquent {}
}

namespace App\Common\Model\Article{
/**
 * 资讯收藏
 *
 * @property int $id 主键
 * @property int $user_id 用户ID
 * @property int $article_id 文章ID
 * @property int $status 收藏状态 0-未收藏 1-已收藏
 * @property \Illuminate\Support\Carbon $create_time 创建时间
 * @property \Illuminate\Support\Carbon $update_time 更新时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCollect newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCollect newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCollect onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCollect query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCollect whereArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCollect whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCollect whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCollect whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCollect whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCollect whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCollect whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCollect withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ArticleCollect withoutTrashed()
 * @mixin \Eloquent
 */
	class ArticleCollect extends \Eloquent {}
}

namespace App\Common\Model\Auth{
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
	class Admin extends \Eloquent {}
}

namespace App\Common\Model\Auth{
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
	class AdminDept extends \Eloquent {}
}

namespace App\Common\Model\Auth{
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
	class AdminJobs extends \Eloquent {}
}

namespace App\Common\Model\Auth{
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
	class AdminRole extends \Eloquent {}
}

namespace App\Common\Model\Auth{
/**
 * 
 *
 * @property int $id
 * @property int $admin_id 用户id
 * @property int $terminal 客户端类型：1-pc管理后台 2-mobile手机管理后台
 * @property string $token 令牌
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property int $expire_time 到期时间
 * @property-read \App\Common\Model\Auth\Admin|null $admin
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminSession newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminSession newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminSession query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminSession whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminSession whereExpireTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminSession whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminSession whereTerminal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminSession whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdminSession whereUpdateTime($value)
 * @mixin \Eloquent
 */
	class AdminSession extends \Eloquent {}
}

namespace App\Common\Model\Auth{
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
	class SystemMenu extends \Eloquent {}
}

namespace App\Common\Model\Auth{
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
	class SystemRole extends \Eloquent {}
}

namespace App\Common\Model\Auth{
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
	class SystemRoleMenu extends \Eloquent {}
}

namespace App\Common\Model{
/**
 * 基础模型
 *
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BaseModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BaseModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BaseModel query()
 * @mixin \Eloquent
 */
	class BaseModel extends \Eloquent {}
}

namespace App\Common\Model\Channel{
/**
 * 微信公众号回复
 *
 * @property int $id
 * @property string $name 规则名称
 * @property string $keyword 关键词
 * @property int $reply_type 回复类型 1-关注回复 2-关键字回复 3-默认回复
 * @property int $matching_type 匹配方式：1-全匹配；2-模糊匹配
 * @property int $content_type 内容类型：1-文本
 * @property string $content 回复内容
 * @property int $status 启动状态：1-启动；0-关闭
 * @property int $sort 排序
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property int|null $delete_time 删除时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereContentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereKeyword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereMatchingType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereReplyType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfficialAccountReply whereUpdateTime($value)
 * @mixin \Eloquent
 */
	class OfficialAccountReply extends \Eloquent {}
}

namespace App\Common\Model{
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
	class Config extends \Eloquent {}
}

namespace App\Common\Model\Decorate{
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
	class DecoratePage extends \Eloquent {}
}

namespace App\Common\Model\Decorate{
/**
 * 装修配置-底部导航
 *
 * @property int $id 主键
 * @property string $name 导航名称
 * @property string $selected 未选图标
 * @property string $unselected 已选图标
 * @property array<array-key, mixed>|null $link 链接地址
 * @property int $is_show 显示状态
 * @property \Illuminate\Support\Carbon $create_time 创建时间
 * @property \Illuminate\Support\Carbon $update_time 更新时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecorateTabbar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecorateTabbar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecorateTabbar query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecorateTabbar whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecorateTabbar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecorateTabbar whereIsShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecorateTabbar whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecorateTabbar whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecorateTabbar whereSelected($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecorateTabbar whereUnselected($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DecorateTabbar whereUpdateTime($value)
 * @mixin \Eloquent
 */
	class DecorateTabbar extends \Eloquent {}
}

namespace App\Common\Model\Dept{
/**
 * 部门模型
 *
 * @property int $id id
 * @property string $name 部门名称
 * @property int $pid 上级部门id
 * @property int $sort 排序
 * @property string|null $leader 负责人
 * @property string|null $mobile 联系电话
 * @property int $status 部门状态（0停用 1正常）
 * @property \Illuminate\Support\Carbon $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 修改时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property-read string $status_desc
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept whereLeader($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dept withoutTrashed()
 * @mixin \Eloquent
 */
	class Dept extends \Eloquent {}
}

namespace App\Common\Model\Dept{
/**
 * 岗位模型
 *
 * @property int $id id
 * @property string $name 岗位名称
 * @property string $code 岗位编码
 * @property int|null $sort 显示顺序
 * @property int $status 状态（0停用 1正常）
 * @property string|null $remark 备注
 * @property \Illuminate\Support\Carbon $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 修改时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property-read string $status_desc
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jobs withoutTrashed()
 * @mixin \Eloquent
 */
	class Jobs extends \Eloquent {}
}

namespace App\Common\Model\Dict{
/**
 * 字典数据模型
 *
 * @property int $id id
 * @property string $name 数据名称
 * @property string $value 数据值
 * @property int $type_id 字典类型id
 * @property string $type_value 字典类型
 * @property int|null $sort 排序值
 * @property int $status 状态 0-停用 1-正常
 * @property string|null $remark 备注
 * @property \Illuminate\Support\Carbon $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 修改时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property-read mixed $status_desc
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereTypeValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictData withoutTrashed()
 * @mixin \Eloquent
 */
	class DictData extends \Eloquent {}
}

namespace App\Common\Model\Dict{
/**
 * 字典类型模型
 *
 * @property int $id id
 * @property string $name 字典名称
 * @property string $type 字典类型名称
 * @property int $status 状态 0-停用 1-正常
 * @property string|null $remark 备注
 * @property \Illuminate\Support\Carbon $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 修改时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property-read mixed $status_desc
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictType withoutTrashed()
 * @mixin \Eloquent
 */
	class DictType extends \Eloquent {}
}

namespace App\Common\Model\File{
/**
 * 
 *
 * @property int $id 主键ID
 * @property int $cid 类目ID
 * @property int $source_id 上传者id
 * @property int $source 来源类型[0-后台,1-用户]
 * @property int $type 类型[10=图片, 20=视频]
 * @property string $name 文件名称
 * @property string $uri 文件路径
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereCid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereSourceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File whereUri($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|File withoutTrashed()
 * @mixin \Eloquent
 */
	class File extends \Eloquent {}
}

namespace App\Common\Model\File{
/**
 * 
 *
 * @property int $id 主键ID
 * @property int $pid 父级ID
 * @property int $type 类型[10=图片，20=视频，30=文件]
 * @property string $name 分类名称
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FileCate withoutTrashed()
 * @mixin \Eloquent
 */
	class FileCate extends \Eloquent {}
}

namespace App\Common\Model{
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
	class HotSearch extends \Eloquent {}
}

namespace App\Common\Model\Notice{
/**
 * 通知记录模型
 *
 * @property int $id ID
 * @property int $user_id 用户id
 * @property string $title 标题
 * @property string $content 内容
 * @property int|null $scene_id 场景
 * @property int|null $read 已读状态;0-未读,1-已读
 * @property int|null $recipient 通知接收对象类型;1-会员;2-商家;3-平台;4-游客(未注册用户)
 * @property int|null $send_type 通知发送类型 1-系统通知 2-短信通知 3-微信模板 4-微信小程序
 * @property int|null $notice_type 通知类型 1-业务通知 2-验证码
 * @property string|null $extra 其他
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereNoticeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereRecipient($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereSceneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereSendType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeRecord withoutTrashed()
 * @mixin \Eloquent
 */
	class NoticeRecord extends \Eloquent {}
}

namespace App\Common\Model\Notice{
/**
 * 
 *
 * @property int $id
 * @property int $scene_id 场景id
 * @property string $scene_name 场景名称
 * @property string $scene_desc 场景描述
 * @property int $recipient 接收者 1-用户 2-平台
 * @property int $type 通知类型: 1-业务通知 2-验证码
 * @property array $system_notice 系统通知设置
 * @property array $sms_notice 短信通知设置
 * @property array $oa_notice 公众号通知设置
 * @property array $mnp_notice 小程序通知设置
 * @property string $support 支持的发送类型 1-系统通知 2-短信通知 3-微信模板消息 4-小程序提醒
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property-read string $recipient_desc
 * @property-read string $sms_status_desc
 * @property-read string $type_desc
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereMnpNotice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereOaNotice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereRecipient($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereSceneDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereSceneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereSceneName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereSmsNotice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereSupport($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereSystemNotice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NoticeSetting whereUpdateTime($value)
 * @mixin \Eloquent
 */
	class NoticeSetting extends \Eloquent {}
}

namespace App\Common\Model\Notice{
/**
 * 短信记录模型
 *
 * @property int $id id
 * @property int $scene_id 场景id
 * @property string $mobile 手机号码
 * @property string $content 发送内容
 * @property string|null $code 发送关键字（注册、找回密码）
 * @property int|null $is_verify 是否已验证；0-否；1-是
 * @property int|null $check_num 验证次数
 * @property int $send_status 发送状态：0-发送中；1-发送成功；2-发送失败
 * @property int $send_time 发送时间
 * @property string|null $results 短信结果
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereCheckNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereIsVerify($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereResults($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereSceneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereSendStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereSendTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SmsLog withoutTrashed()
 * @mixin \Eloquent
 */
	class SmsLog extends \Eloquent {}
}

namespace App\Common\Model{
/**
 * 
 *
 * @property int $id
 * @property int $admin_id 管理员ID
 * @property string $admin_name 管理员名称
 * @property string $account 管理员账号
 * @property string|null $action 操作名称
 * @property string $type 请求方式
 * @property string $url 访问链接
 * @property string|null $params 请求数据
 * @property string|null $result 请求结果
 * @property string $ip ip地址
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereAdminName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereParams($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereResult($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OperationLog whereUrl($value)
 * @mixin \Eloquent
 */
	class OperationLog extends \Eloquent {}
}

namespace App\Common\Model\Pay{
/**
 * 
 *
 * @property int $id
 * @property string $name 模版名称
 * @property int $pay_way 支付方式:1-余额支付;2-微信支付;3-支付宝支付;
 * @property array<array-key, mixed>|null $config 对应支付配置(json字符串)
 * @property string $icon 图标
 * @property int|null $sort 排序
 * @property string|null $remark 备注
 * @property-read string|string[] $pay_way_name
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PayConfig newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PayConfig newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PayConfig query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PayConfig whereConfig($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PayConfig whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PayConfig whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PayConfig whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PayConfig wherePayWay($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PayConfig whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PayConfig whereSort($value)
 * @mixin \Eloquent
 */
	class PayConfig extends \Eloquent {}
}

namespace App\Common\Model\Pay{
/**
 * 
 *
 * @property int $id
 * @property int $pay_config_id 支付配置ID
 * @property int $scene 场景:1-微信小程序;2-微信公众号;3-H5;4-PC;5-APP;
 * @property int $is_default 是否默认支付:0-否;1-是;
 * @property int $status 状态:0-关闭;1-开启;
 * @property-read mixed $icon
 * @property-read mixed $pay_way_name
 * @property string $image
 * @property-read \App\Common\Model\Pay\PayConfig|null $payConfig
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PayWay newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PayWay newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PayWay query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PayWay whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PayWay whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PayWay wherePayConfigId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PayWay whereScene($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PayWay whereStatus($value)
 * @mixin \Eloquent
 */
	class PayWay extends \Eloquent {}
}

namespace App\Common\Model\Recharge{
/**
 * 充值订单模型
 *
 * @property int $id id
 * @property string $sn 订单编号
 * @property int $user_id 用户id
 * @property string|null $pay_sn 支付编号-冗余字段，针对微信同一主体不同客户端支付需用不同订单号预留。
 * @property int $pay_way 支付方式 2-微信支付 3-支付宝支付
 * @property int $pay_status 支付状态：0-待支付；1-已支付
 * @property int|null $pay_time 支付时间
 * @property string $order_amount 充值金额
 * @property int|null $order_terminal 终端
 * @property string|null $transaction_id 第三方平台交易流水号
 * @property int|null $refund_status 退款状态 0-未退款 1-已退款
 * @property string|null $refund_transaction_id 退款交易流水号
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property-read mixed $pay_status_text
 * @property-read mixed $pay_way_text
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereOrderAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereOrderTerminal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder wherePaySn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder wherePayStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder wherePayTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder wherePayWay($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereRefundStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereRefundTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RechargeOrder withoutTrashed()
 * @mixin \Eloquent
 */
	class RechargeOrder extends \Eloquent {}
}

namespace App\Common\Model\Refund{
/**
 * 退款日志模型
 *
 * @property int $id id
 * @property string|null $sn 编号
 * @property int $record_id 退款记录id
 * @property int $user_id 关联用户
 * @property int $handle_id 处理人id（管理员id）
 * @property string $order_amount 订单总的应付款金额，冗余字段
 * @property string $refund_amount 本次退款金额
 * @property int $refund_status 退款状态，0退款中，1退款成功，2退款失败
 * @property string|null $refund_msg 退款信息
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property-read mixed $handler
 * @property-read mixed $refund_status_text
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereHandleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereOrderAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereRecordId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereRefundAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereRefundMsg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereRefundStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundLog whereUserId($value)
 * @mixin \Eloquent
 */
	class RefundLog extends \Eloquent {}
}

namespace App\Common\Model\Refund{
/**
 * 退款记录模型
 *
 * @property int $id id
 * @property string $sn 退款编号
 * @property int $user_id 关联用户
 * @property int $order_id 来源订单id
 * @property string $order_sn 来源单号
 * @property string|null $order_type 订单来源 order-商品订单 recharge-充值订单
 * @property string $order_amount 订单总的应付款金额，冗余字段
 * @property string $refund_amount 本次退款金额
 * @property string|null $transaction_id 第三方平台交易流水号
 * @property int $refund_way 退款方式 1-线上退款 2-线下退款
 * @property int $refund_type 退款类型 1-后台退款
 * @property int $refund_status 退款状态，0退款中，1退款成功，2退款失败
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property-read mixed $refund_status_text
 * @property-read mixed $refund_type_text
 * @property-read mixed $refund_way_text
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereOrderAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereOrderSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereOrderType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereRefundAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereRefundStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereRefundType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereRefundWay($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefundRecord whereUserId($value)
 * @mixin \Eloquent
 */
	class RefundRecord extends \Eloquent {}
}

namespace App\Common\Model{
/**
 * StockList模型
 * Class StockList
 *
 * @package App\Common\Model
 * @property int $id
 * @property string $market
 * @property string $symbol 股票代码
 * @property string $code 代码
 * @property string $exchange 交易所
 * @property string $type 股票类型
 * @property string $name 股票名称
 * @property int $chg 涨跌额
 * @property int $current 当前价
 * @property int $current_year_percent 年初至今-涨跌幅
 * @property int $percent 涨跌幅
 * @property int $volume 成交量
 * @property int $amount 成交额
 * @property int $turnover_rate 换手率
 * @property int $pe_ttm 市盈率(TTM)
 * @property int $dividend_yield 股息率
 * @property int $market_capital 总市值
 * @property int $float_market_capital 流通市值
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList query()
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereChg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereCurrent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereCurrentYearPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereDividendYield($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereExchange($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereFloatMarketCapital($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereMarket($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereMarketCapital($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList wherePeTtm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList wherePercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereTurnoverRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static >|StockList whereVolume($value)
 * @mixin \Eloquent
 */
	class StockList extends \Eloquent {}
}

namespace App\Common\Model{
/**
 * StockMonitor模型
 * Class StockMonitor
 *
 * @package App\Common\Model
 * @property int $id
 * @property string|null $where 监控条件
 * @property string|null $cycle 周期
 * @property string|null $notice 通知
 * @property int|null $status 启用状态
 * @property int|null $complete 是否完成
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMonitor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMonitor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMonitor query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMonitor whereComplete($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMonitor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMonitor whereCycle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMonitor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMonitor whereNotice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMonitor whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMonitor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockMonitor whereWhere($value)
 */
	class StockMonitor extends \Eloquent {}
}

namespace App\Common\Model{
/**
 * StockNotice模型
 * Class StockNotice
 *
 * @package App\Common\Model
 * @property int $id
 * @property string|null $name 名称
 * @property string|null $type 通知类型，如email, dingtalk, wechat
 * @property array<array-key, mixed>|null $recipient 接收者，如邮箱地址、钉钉机器人URL等
 * @property string|null $content 通知内容模板
 * @property int $status 是否启用
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice whereRecipient($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockNotice whereUpdatedAt($value)
 */
	class StockNotice extends \Eloquent {}
}

namespace App\Common\Model\Tools{
/**
 * 代码生成器-数据表字段信息模型
 *
 * @property int $id id
 * @property int $table_id 表id
 * @property string $column_name 字段名称
 * @property string $column_comment 字段描述
 * @property string $column_type 字段类型
 * @property int|null $is_required 是否必填 0-非必填 1-必填
 * @property int|null $is_pk 是否为主键 0-不是 1-是
 * @property int|null $is_insert 是否为插入字段 0-不是 1-是
 * @property int|null $is_update 是否为更新字段 0-不是 1-是
 * @property int|null $is_lists 是否为列表字段 0-不是 1-是
 * @property int|null $is_query 是否为查询字段 0-不是 1-是
 * @property string|null $query_type 查询类型
 * @property string|null $view_type 显示类型
 * @property string|null $dict_type 字典类型
 * @property \Illuminate\Support\Carbon $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 修改时间
 * @property-read \App\Common\Model\Tools\GenerateTable|null $generateTable
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereColumnComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereColumnName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereColumnType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereDictType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereIsInsert($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereIsLists($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereIsPk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereIsQuery($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereIsRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereIsUpdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereQueryType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereTableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereViewType($value)
 * @mixin \Eloquent
 */
	class GenerateColumn extends \Eloquent {}
}

namespace App\Common\Model\Tools{
/**
 * 代码生成器-数据表信息模型
 *
 * @property int $id id
 * @property string $table_name 表名称
 * @property string $table_comment 表描述
 * @property int $template_type 模板类型 0-单表(curd) 1-树表(curd)
 * @property string|null $author 作者
 * @property string|null $remark 备注
 * @property int $generate_type 生成方式  0-压缩包下载 1-生成到模块
 * @property string|null $module_name 模块名
 * @property string|null $class_dir 类目录名
 * @property string|null $class_comment 类描述
 * @property int|null $admin_id 管理员id
 * @property array<array-key, mixed>|null $menu 菜单配置
 * @property array<array-key, mixed>|null $delete 删除配置
 * @property array<array-key, mixed>|null $tree 树表配置
 * @property array<array-key, mixed>|null $relations 关联配置
 * @property \Illuminate\Support\Carbon $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 修改时间
 * @property-read mixed $template_type_desc
 * @property string $image
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Common\Model\Tools\GenerateColumn> $tableColumn
 * @property-read int|null $table_column_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereClassComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereClassDir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereGenerateType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereModuleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereRelations($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereTableComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereTableName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereTemplateType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereTree($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereUpdateTime($value)
 * @mixin \Eloquent
 */
	class GenerateTable extends \Eloquent {}
}

namespace App\Common\Model\User{
/**
 * 用户模型
 *
 * @property int $id 主键
 * @property int $sn 编号
 * @property string $avatar 头像
 * @property string $real_name 真实姓名
 * @property string $nickname 用户昵称
 * @property string $account 用户账号
 * @property string $password 用户密码
 * @property string $mobile 用户电话
 * @property int $sex 用户性别: [1=男, 2=女]
 * @property int $channel 注册渠道: [1-微信小程序 2-微信公众号 3-手机H5 4-电脑PC 5-苹果APP 6-安卓APP]
 * @property int $is_disable 是否禁用: [0=否, 1=是]
 * @property string $login_ip 最后登录IP
 * @property int $login_time 最后登录时间
 * @property int $is_new_user 是否是新注册用户: [1-是, 0-否]
 * @property string|null $user_money 用户余额
 * @property string|null $total_recharge_amount 累计充值
 * @property \Illuminate\Support\Carbon $create_time 创建时间
 * @property \Illuminate\Support\Carbon $update_time 更新时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property string $image
 * @property-read \App\Common\Model\User\UserAuth|null $userAuth
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereChannel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereIsDisable($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereIsNewUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLoginIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLoginTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRealName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereTotalRechargeAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUserMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutTrashed()
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

namespace App\Common\Model\User{
/**
 * 账户流水记录模型
 *
 * @property int $id
 * @property string $sn 流水号
 * @property int $user_id 用户id
 * @property int $change_object 变动对象
 * @property int $change_type 变动类型
 * @property int $action 动作 1-增加 2-减少
 * @property string $change_amount 变动数量
 * @property string $left_amount 变动后数量
 * @property string|null $source_sn 关联单号
 * @property string|null $remark 备注
 * @property string|null $extra 预留扩展字段
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property \Illuminate\Support\Carbon|null $delete_time 删除时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereChangeAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereChangeObject($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereChangeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereDeleteTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereLeftAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereSourceSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAccountLog withoutTrashed()
 * @mixin \Eloquent
 */
	class UserAccountLog extends \Eloquent {}
}

namespace App\Common\Model\User{
/**
 * 用户授权表
 *
 * @property int $id
 * @property int $user_id 用户id
 * @property string $openid 微信openid
 * @property string|null $unionid 微信unionid
 * @property int $terminal 客户端类型：1-微信小程序；2-微信公众号；3-手机H5；4-电脑PC；5-苹果APP；6-安卓APP
 * @property \Illuminate\Support\Carbon|null $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAuth newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAuth newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAuth query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAuth whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAuth whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAuth whereOpenid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAuth whereTerminal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAuth whereUnionid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAuth whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserAuth whereUserId($value)
 * @mixin \Eloquent
 */
	class UserAuth extends \Eloquent {}
}

namespace App\Common\Model\User{
/**
 * 用户登录token信息
 *
 * @property int $id
 * @property int $user_id 用户id
 * @property int $terminal 客户端类型：1-微信小程序；2-微信公众号；3-手机H5；4-电脑PC；5-苹果APP；6-安卓APP
 * @property string $token 令牌
 * @property \Illuminate\Support\Carbon|null $update_time 更新时间
 * @property int $expire_time 到期时间
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserSession newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserSession newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserSession query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserSession whereExpireTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserSession whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserSession whereTerminal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserSession whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserSession whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserSession whereUserId($value)
 * @mixin \Eloquent
 */
	class UserSession extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $symbol 股票代码
 * @property string $code 代码
 * @property string $exchange 交易所
 * @property string $type 股票类型
 * @property string $name 股票名称
 * @property string $chg 涨跌额
 * @property string $current 当前价
 * @property string $current_year_percent 年初至今-涨跌幅
 * @property string $percent 涨跌幅
 * @property string $volume 成交量
 * @property string $amount 成交额
 * @property string $turnover_rate 换手率
 * @property string $pe_ttm 市盈率(TTM)
 * @property string $dividend_yield 股息率
 * @property string $market_capital 总市值
 * @property string $float_market_capital 流通市值
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereChg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereCurrent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereCurrentYearPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereDividendYield($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereExchange($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereFloatMarketCapital($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereMarketCapital($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList wherePeTtm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList wherePercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereTurnoverRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereVolume($value)
 * @property string $market
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockList whereMarket($value)
 * @mixin \Eloquent
 */
	class StockList extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $date 日期
 * @property string $symbol 股票代码
 * @property string $code 代码
 * @property string $exchange 交易所
 * @property string $type 股票类型
 * @property string $name 股票名称
 * @property string $chg 涨跌额
 * @property string $current 当前价
 * @property string $current_year_percent 年初至今-涨跌幅
 * @property string $percent 涨跌幅
 * @property string $volume 成交量
 * @property string $amount 成交额
 * @property string $turnover_rate 换手率
 * @property string $pe_ttm 市盈率(TTM)
 * @property string $dividend_yield 股息率
 * @property string $market_capital 总市值
 * @property string $float_market_capital 流通市值
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereChg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereCurrent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereCurrentYearPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereDividendYield($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereExchange($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereFloatMarketCapital($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereMarketCapital($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord wherePeTtm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord wherePercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereTurnoverRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereVolume($value)
 * @property string $market
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockRecord whereMarket($value)
 * @mixin \Eloquent
 */
	class StockRecord extends \Eloquent {}
}

