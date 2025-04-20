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
        Schema::create('decorate_page', function (Blueprint $table) {
            $table->comment('装修页面配置表');
            $table->increments('id')->comment('主键');
            $table->unsignedTinyInteger('type')->default(10)->comment('页面类型 1=商城首页, 2=个人中心, 3=客服设置 4-PC首页');
            $table->string('name', 100)->default('')->comment('页面名称');
            $table->text('data')->nullable()->comment('页面数据');
            $table->text('meta')->nullable()->comment('页面设置');
            $table->unsignedInteger('create_time')->default(0)->comment('创建时间');
            $table->unsignedInteger('update_time')->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decorate_page');
    }
};
