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
        Schema::create('notice_record', function (Blueprint $table) {
            $table->comment('通知记录表');
            $table->increments('id')->comment('ID');
            $table->unsignedInteger('user_id')->comment('用户id');
            $table->string('title', 50)->default('')->comment('标题');
            $table->text('content')->comment('内容');
            $table->unsignedInteger('scene_id')->nullable()->default(0)->comment('场景');
            $table->boolean('read')->nullable()->default(false)->comment('已读状态;0-未读,1-已读');
            $table->boolean('recipient')->nullable()->default(false)->comment('通知接收对象类型;1-会员;2-商家;3-平台;4-游客(未注册用户)');
            $table->boolean('send_type')->nullable()->default(false)->comment('通知发送类型 1-系统通知 2-短信通知 3-微信模板 4-微信小程序');
            $table->boolean('notice_type')->nullable()->comment('通知类型 1-业务通知 2-验证码');
            $table->string('extra')->nullable()->default('')->comment('其他');
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
        Schema::dropIfExists('notice_record');
    }
};
