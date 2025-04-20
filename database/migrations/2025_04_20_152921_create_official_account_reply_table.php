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
        Schema::create('official_account_reply', function (Blueprint $table) {
            $table->comment('公众号消息回调表');
            $table->increments('id');
            $table->string('name', 64)->default('')->comment('规则名称');
            $table->string('keyword', 64)->default('')->comment('关键词');
            $table->boolean('reply_type')->comment('回复类型 1-关注回复 2-关键字回复 3-默认回复');
            $table->unsignedTinyInteger('matching_type')->default(1)->comment('匹配方式：1-全匹配；2-模糊匹配');
            $table->unsignedTinyInteger('content_type')->default(1)->comment('内容类型：1-文本');
            $table->text('content')->comment('回复内容');
            $table->unsignedTinyInteger('status')->default(0)->comment('启动状态：1-启动；0-关闭');
            $table->unsignedInteger('sort')->default(50)->comment('排序');
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
        Schema::dropIfExists('official_account_reply');
    }
};
