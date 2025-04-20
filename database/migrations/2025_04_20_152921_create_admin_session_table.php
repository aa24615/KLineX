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
        Schema::create('admin_session', function (Blueprint $table) {
            $table->comment('管理员会话表');
            $table->increments('id');
            $table->unsignedInteger('admin_id')->comment('用户id');
            $table->boolean('terminal')->default(true)->comment('客户端类型：1-pc管理后台 2-mobile手机管理后台');
            $table->string('token', 32)->unique('token')->comment('令牌');
            $table->integer('update_time')->nullable()->comment('更新时间');
            $table->integer('expire_time')->comment('到期时间');

            $table->unique(['admin_id', 'terminal'], 'admin_id_client');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_session');
    }
};
