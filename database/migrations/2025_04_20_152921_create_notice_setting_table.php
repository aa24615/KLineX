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
        Schema::create('notice_setting', function (Blueprint $table) {
            $table->comment('通知设置表');
            $table->integer('id', true);
            $table->integer('scene_id')->comment('场景id');
            $table->string('scene_name')->default('')->comment('场景名称');
            $table->string('scene_desc')->default('')->comment('场景描述');
            $table->boolean('recipient')->default(true)->comment('接收者 1-用户 2-平台');
            $table->boolean('type')->default(true)->comment('通知类型: 1-业务通知 2-验证码');
            $table->text('system_notice')->nullable()->comment('系统通知设置');
            $table->text('sms_notice')->nullable()->comment('短信通知设置');
            $table->text('oa_notice')->nullable()->comment('公众号通知设置');
            $table->text('mnp_notice')->nullable()->comment('小程序通知设置');
            $table->char('support', 10)->default('')->comment('支持的发送类型 1-系统通知 2-短信通知 3-微信模板消息 4-小程序提醒');
            $table->integer('update_time')->nullable()->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notice_setting');
    }
};
