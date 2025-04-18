<?php

namespace App\Common\Model\Pay;

use App\Common\Enum\PayEnum;
use App\Common\Model\BaseModel;
use App\Common\Service\FileService;


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
class PayConfig extends BaseModel
{
    protected $table = 'dev_pay_config';

    public $casts = [
        'config' => 'array',
    ];

    protected $appends = ['pay_way_name'];

    public $timestamps = false;

    /**
     * @notes 支付图标获取器 - 路径添加域名
     * @param $value
     * @return string
     */
    public function getIconAttribute($value)
    {
        return empty($value) ? '' : FileService::getFileUrl($value);
    }

    /**
     * @notes 支付方式名称获取器
     * @param $value
     * @param $data
     * @return string|string[]
     */
    public function getPayWayNameAttribute($value)
    {
        return PayEnum::getPayDesc($this->attributes['pay_way']);
    }
}
