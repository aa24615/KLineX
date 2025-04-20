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
        Schema::create('user_session', function (Blueprint $table) {
            $table->comment('用户会话表');
            $table->integer('id', true);
            $table->integer('user_id')->comment('用户id');
            $table->boolean('terminal')->default(true)->comment('客户端类型：1-微信小程序；2-微信公众号；3-手机H5；4-电脑PC；5-苹果APP；6-安卓APP');
            $table->string('token', 32)->unique('token')->comment('令牌');
            $table->integer('update_time')->nullable()->comment('更新时间');
            $table->integer('expire_time')->comment('到期时间');

            $table->unique(['user_id', 'terminal'], 'admin_id_client');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_session');
    }
};
