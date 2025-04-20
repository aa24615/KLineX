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
        Schema::create('decorate_tabbar', function (Blueprint $table) {
            $table->comment('装修底部导航表');
            $table->increments('id')->comment('主键');
            $table->string('name', 20)->default('')->comment('导航名称');
            $table->string('selected', 200)->default('')->comment('未选图标');
            $table->string('unselected', 200)->default('')->comment('已选图标');
            $table->string('link', 200)->nullable()->comment('链接地址');
            $table->unsignedTinyInteger('is_show')->default(1)->comment('显示状态');
            $table->unsignedInteger('create_time')->default(0)->comment('创建时间');
            $table->unsignedInteger('update_time')->default(0)->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decorate_tabbar');
    }
};
