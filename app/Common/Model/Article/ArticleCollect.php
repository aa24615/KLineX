<?php

namespace App\Common\Model\Article;

use App\Common\Enum\YesNoEnum;
use App\Common\Model\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

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
class ArticleCollect extends BaseModel
{
    use SoftDeletes;

    protected $table = 'article_collect';

    protected function getDeletedAtColumn()
    {
        return 'delete_time';
    }

    /**
     * 是否已收藏文章
     * @param int $userId
     * @param int $articleId
     * @return bool (true=已收藏, false=未收藏)
     */
    public static function isCollectArticle(int $userId, int $articleId): bool
    {
        $collect = self::where([
            'user_id' => $userId,
            'article_id' => $articleId,
            'status' => YesNoEnum::YES
        ])->first();

        return !is_null($collect); // 如果找到了收藏记录则返回 true
    }
}
