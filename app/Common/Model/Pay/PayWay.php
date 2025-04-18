<?php

namespace App\Common\Model\Pay;

use App\Common\Model\BaseModel;
use App\Common\Service\FileService;

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
class PayWay extends BaseModel
{
    protected $table = 'dev_pay_way';

    protected $appends = ['pay_way_name'];

    public $timestamps = false;

    public function getIconAttribute($value)
    {
        return FileService::getFileUrl($value);
    }

    /**
     * @notes 支付方式名称获取器
     * @param $value
     * @return mixed
     */
    public function getPayWayNameAttribute($value)
    {
        return PayConfig::query()->where('id', $this->attributes['pay_config_id'])->value('name');
    }

    /**
     * @notes 关联支配配置模型
     */
    public function payConfig()
    {
        return $this->hasOne(PayConfig::class, 'id', 'pay_config_id');
    }
}
