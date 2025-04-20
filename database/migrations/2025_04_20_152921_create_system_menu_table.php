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
        Schema::create('system_menu', function (Blueprint $table) {
            $table->comment('系统菜单表');
            $table->increments('id')->comment('主键');
            $table->unsignedInteger('pid')->default(0)->comment('上级菜单');
            $table->char('type', 2)->default('')->comment('权限类型: M=目录，C=菜单，A=按钮');
            $table->string('name', 100)->default('')->comment('菜单名称');
            $table->string('icon', 100)->default('')->comment('菜单图标');
            $table->unsignedSmallInteger('sort')->default(0)->comment('菜单排序');
            $table->string('perms', 100)->default('')->comment('权限标识');
            $table->string('paths', 100)->default('')->comment('路由地址');
            $table->string('component', 200)->default('')->comment('前端组件');
            $table->string('selected', 200)->default('')->comment('选中路径');
            $table->string('params', 200)->default('')->comment('路由参数');
            $table->unsignedTinyInteger('is_cache')->default(0)->comment('是否缓存: 0=否, 1=是');
            $table->unsignedTinyInteger('is_show')->default(1)->comment('是否显示: 0=否, 1=是');
            $table->unsignedTinyInteger('is_disable')->default(0)->comment('是否禁用: 0=否, 1=是');
            $table->unsignedInteger('create_time')->default(0)->comment('创建时间');
            $table->unsignedInteger('update_time')->default(0)->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_menu');
    }
};
