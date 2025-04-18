<?php

namespace App\Common\Model\Decorate;

use App\Common\Model\BaseModel;
use App\Common\Service\FileService;

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
class DecorateTabbar extends BaseModel
{
    protected $table = 'decorate_tabbar';

    public $casts = [
        'link' => 'array',
    ];

    /**
     * @notes 获取底部导航列表
     * @return array
     */
    public static function getTabbarLists()
    {
        $tabbar = self::all()->toArray();

        if (empty($tabbar)) {
            return $tabbar;
        }

        foreach ($tabbar as &$item) {
            if (!empty($item['selected'])) {
                $item['selected'] = FileService::getFileUrl($item['selected']);
            }
            if (!empty($item['unselected'])) {
                $item['unselected'] = FileService::getFileUrl($item['unselected']);
            }
        }

        return $tabbar;
    }
}
