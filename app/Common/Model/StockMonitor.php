<?php
// +----------------------------------------------------------------------
// | likeadmin_laravel快速开发前后端分离管理后台
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | likeadmin项目：https://gitee.com/likeshop_gitee/likeadmin
// | likeadmin_laravel项目：https://github.com/1nFrastr/likeadmin_laravel
// | 独立开发者博客：https://www.sodair.top
// +----------------------------------------------------------------------
// | author: 1nFrastr x likeadminTeam
// +----------------------------------------------------------------------

namespace App\Common\Model;


use App\Common\Model\BaseModel;



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
 * @mixin \Eloquent
 */
class StockMonitor extends BaseModel
{
    

    protected $table = 'stock_monitor';

    

    
}
