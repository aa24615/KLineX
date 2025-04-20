<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('operation_log', function (Blueprint $table) {
            $table->comment('系统日志表');
            $table->integer('id', true);
            $table->integer('admin_id')->comment('管理员ID');
            $table->string('admin_name', 16)->default('')->comment('管理员名称');
            $table->string('account', 16)->default('')->comment('管理员账号');
            $table->string('action', 64)->nullable()->default('')->comment('操作名称');
            $table->string('type', 8)->comment('请求方式');
            $table->string('url', 600)->comment('访问链接');
            $table->text('params')->nullable()->comment('请求数据');
            $table->text('result')->nullable()->comment('请求结果');
            $table->string('ip', 39)->default('')->comment('ip地址');
            $table->integer('create_time')->nullable()->comment('创建时间');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operation_log');
    }
};
