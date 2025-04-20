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
        Schema::create('sms_log', function (Blueprint $table) {
            $table->comment('短信记录表');
            $table->integer('id', true)->comment('id');
            $table->integer('scene_id')->comment('场景id');
            $table->string('mobile', 11)->comment('手机号码');
            $table->string('content')->comment('发送内容');
            $table->string('code', 32)->nullable()->comment('发送关键字（注册、找回密码）');
            $table->boolean('is_verify')->nullable()->default(false)->comment('是否已验证；0-否；1-是');
            $table->integer('check_num')->nullable()->default(0)->comment('验证次数');
            $table->boolean('send_status')->comment('发送状态：0-发送中；1-发送成功；2-发送失败');
            $table->integer('send_time')->comment('发送时间');
            $table->text('results')->nullable()->comment('短信结果');
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
        Schema::dropIfExists('sms_log');
    }
};
