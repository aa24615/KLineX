<?php


namespace App\Common\Model\Article;

use App\Common\Model\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

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
class ArticleCate extends BaseModel
{
    protected $table = 'article_cate';

    use SoftDeletes;

    protected $appends = [
        'is_show_desc',
        'article_count'
    ];

    protected function getDeletedAtColumn()
    {
        return 'delete_time';
    }

    /**
     * @notes 关联文章
     */
    public function article()
    {
        return $this->hasMany(Article::class, 'cid', 'id');
    }


    /**
     * @notes 状态描述
     * @param $value
     * @param $data
     * @return string
     */
    public function getIsShowDescAttribute($value)
    {
        if (!isset($this->attributes['is_show'])) {
            return '';
        }
        return $this->attributes['is_show'] ? '启用' : '停用';
    }

    /**
     * @notes 文章数量
     * @param $value
     * @param $data
     * @return int
     */
    public function getArticleCountAttribute($value)
    {
        return Article::where(['cid' => $this->attributes['id']])->count('id');
    }

}
