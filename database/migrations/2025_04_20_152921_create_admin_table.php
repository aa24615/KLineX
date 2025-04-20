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
        Schema::create('admin', function (Blueprint $table) {
            $table->comment('管理员表');
            $table->increments('id');
            $table->unsignedTinyInteger('root')->default(0)->comment('是否超级管理员 0-否 1-是');
            $table->string('name', 32)->default('')->comment('名称');
            $table->string('avatar')->default('')->comment('用户头像');
            $table->string('account', 32)->default('')->comment('账号');
            $table->string('password', 32)->comment('密码');
            $table->integer('login_time')->nullable()->comment('最后登录时间');
            $table->string('login_ip', 39)->nullable()->default('')->comment('最后登录ip');
            $table->unsignedTinyInteger('multipoint_login')->nullable()->default(1)->comment('是否支持多处登录：1-是；0-否；');
            $table->unsignedTinyInteger('disable')->nullable()->default(0)->comment('是否禁用：0-否；1-是；');
            $table->integer('create_time')->comment('创建时间');
            $table->integer('update_time')->nullable()->comment('修改时间');
            $table->integer('delete_time')->nullable()->comment('删除时间');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
