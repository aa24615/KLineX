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

namespace App\Adminapi\Logic;


use App\Common\Model\StockMonitor;
use App\Common\Logic\BaseLogic;
use Illuminate\Support\Facades\DB;


/**
 * StockMonitor逻辑
 * Class StockMonitorLogic
 * @package App\Adminapi\Logic
 */
class StockMonitorLogic extends BaseLogic
{


    /**
     * @notes 添加
     * @param array $params
     * @return bool
     * @author likeadmin
     * @date 2025/05/10 00:13
     */
    public static function add(array $params): bool
    {
        DB::beginTransaction();
        try {
            StockMonitor::create([
                'where' => $params['where'],
                'cycle' => $params['cycle'],
                'notice' => $params['notice'],
                'status' => $params['status'],
                'complete' => $params['complete']
            ]);

            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            self::setError($e->getMessage());
            return false;
        }
    }


    /**
     * @notes 编辑
     * @param array $params
     * @return bool
     * @author likeadmin
     * @date 2025/05/10 00:13
     */
    public static function edit(array $params): bool
    {
        DB::beginTransaction();
        try {

            $model = StockMonitor::findOrFail($params['id']);
            $model->fill([
                'where' => $params['where'],
                'cycle' => $params['cycle'],
                'notice' => $params['notice'],
                'status' => $params['status'],
                'complete' => $params['complete']
            ]);
            $model->save();

            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            self::setError($e->getMessage());
            return false;
        }
    }


    /**
     * @notes 删除
     * @param array $params
     * @return bool
     * @author likeadmin
     * @date 2025/05/10 00:13
     */
    public static function delete(array $params): bool
    {
        return StockMonitor::destroy($params['id']);
    }


    /**
     * @notes 获取详情
     * @param $params
     * @return array
     * @author likeadmin
     * @date 2025/05/10 00:13
     */
    public static function detail($params): array
    {
        return StockMonitor::findOrFail($params['id'])->toArray();
    }
}
