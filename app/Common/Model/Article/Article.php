<?php

namespace App\Common\Model\Article;

use App\Common\Enum\YesNoEnum;
use App\Common\Model\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

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
class Article extends BaseModel
{
    protected $table = 'article';

    use SoftDeletes;

    protected function getDeletedAtColumn()
    {
        return 'delete_time';
    }

    protected $appends = [
        'cate_name',
        'click'
    ];

    /**
     * 获取分类名称
     * @return string
     */
    public function getCateNameAttribute($value)
    {
        return ArticleCate::where('id', $this->attributes['cid'])->value('name');
    }

    /**
     * 浏览量
     * @return mixed
     */
    public function getClickAttribute($value)
    {
        return ($this->attributes['click_actual'] ?? 0) + ($this->attributes['click_virtual'] ?? 0);
    }

    /**
     * 设置图片域名
     * @param $value
     * @return array|string|string[]|null
     */
    public function getContentAttribute($value)
    {
        return get_file_domain($value);
    }

    /**
     * 清除图片域名
     * @param $value
     */
    public function setContentAttribute($value)
    {
        $this->attributes['content'] = clear_file_domain($value);
    }

    /**
     * 获取文章详情
     * @param int $id
     * @return array
     */
    public static function getArticleDetailArr(int $id)
    {
        $article = self::query()->where(['id' => $id, 'is_show' => YesNoEnum::YES])->first();

        if (!$article) {
            return [];
        }

        $article->increment('click_actual');
        return $article->toArray();
    }
}
