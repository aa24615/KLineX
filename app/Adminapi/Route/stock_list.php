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

use App\Adminapi\Controller\StockListController;
use Illuminate\Support\Facades\Route;

/**
 * @notes 定义路由
 * @author likeadmin
 * @date 2025/04/20 17:22
 */
Route::controller(StockListController::class)->group(function () {
    Route::get('/stock_list/lists', 'lists');
    Route::post('/stock_list/add', 'add');
    Route::post('/stock_list/edit', 'edit');
    Route::post('/stock_list/delete', 'delete');
    Route::get('/stock_list/detail', 'detail');
});
