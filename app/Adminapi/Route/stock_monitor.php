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

use App\Adminapi\Controller\StockMonitorController;
use Illuminate\Support\Facades\Route;

/**
 * @notes 定义路由
 * @author likeadmin
 * @date 2025/05/10 00:13
 */
Route::controller(StockMonitorController::class)->group(function () {
    Route::get('/stock_monitor/lists', 'lists');
    Route::post('/stock_monitor/add', 'add');
    Route::post('/stock_monitor/edit', 'edit');
    Route::post('/stock_monitor/delete', 'delete');
    Route::get('/stock_monitor/detail', 'detail');
});
