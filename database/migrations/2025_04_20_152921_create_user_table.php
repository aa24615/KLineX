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
        Schema::create('user', function (Blueprint $table) {
            $table->comment('用户表');
            $table->increments('id')->comment('主键');
            $table->unsignedInteger('sn')->default(0)->unique('sn')->comment('编号');
            $table->string('avatar', 200)->default('')->comment('头像');
            $table->string('real_name', 32)->default('')->comment('真实姓名');
            $table->string('nickname', 32)->default('')->comment('用户昵称');
            $table->string('account', 32)->default('')->unique('account')->comment('用户账号');
            $table->string('password', 32)->default('')->comment('用户密码');
            $table->string('mobile', 32)->default('')->comment('用户电话');
            $table->unsignedTinyInteger('sex')->default(0)->comment('用户性别: [1=男, 2=女]');
            $table->unsignedTinyInteger('channel')->default(0)->comment('注册渠道: [1-微信小程序 2-微信公众号 3-手机H5 4-电脑PC 5-苹果APP 6-安卓APP]');
            $table->unsignedTinyInteger('is_disable')->default(0)->comment('是否禁用: [0=否, 1=是]');
            $table->string('login_ip', 200)->default('')->comment('最后登录IP');
            $table->unsignedInteger('login_time')->default(0)->comment('最后登录时间');
            $table->boolean('is_new_user')->default(false)->comment('是否是新注册用户: [1-是, 0-否]');
            $table->decimal('user_money', 10)->unsigned()->nullable()->default(0)->comment('用户余额');
            $table->decimal('total_recharge_amount', 10)->unsigned()->nullable()->default(0)->comment('累计充值');
            $table->unsignedInteger('create_time')->default(0)->comment('创建时间');
            $table->unsignedInteger('update_time')->default(0)->comment('更新时间');
            $table->unsignedInteger('delete_time')->nullable()->comment('删除时间');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
