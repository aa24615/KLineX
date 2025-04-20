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
        Schema::create('dev_crontab', function (Blueprint $table) {
            $table->comment('计划任务表');
            $table->integer('id', true);
            $table->string('name', 32)->comment('定时任务名称');
            $table->boolean('type')->comment('类型 1-定时任务');
            $table->tinyInteger('system')->nullable()->default(0)->comment('是否系统任务 0-否 1-是');
            $table->string('remark')->nullable()->default('')->comment('备注');
            $table->string('command', 64)->comment('命令内容');
            $table->string('params', 64)->nullable()->default('')->comment('参数');
            $table->boolean('status')->default(false)->comment('状态 1-运行 2-停止 3-错误');
            $table->string('expression', 64)->comment('运行规则');
            $table->string('error', 256)->nullable()->comment('运行失败原因');
            $table->integer('last_time')->nullable()->comment('最后执行时间');
            $table->string('time', 64)->nullable()->default('0')->comment('实时执行时长');
            $table->string('max_time', 64)->nullable()->default('0')->comment('最大执行时长');
            $table->integer('create_time')->nullable()->comment('创建时间');
            $table->integer('update_time')->nullable()->comment('更新时间');
            $table->integer('delete_time')->nullable()->comment('删除时间');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dev_crontab');
    }
};
