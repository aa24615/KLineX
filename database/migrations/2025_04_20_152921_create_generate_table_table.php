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
        Schema::create('generate_table', function (Blueprint $table) {
            $table->comment('代码生成表信息表');
            $table->integer('id', true)->comment('id');
            $table->string('table_name', 200)->default('')->comment('表名称');
            $table->string('table_comment', 300)->default('')->comment('表描述');
            $table->boolean('template_type')->default(false)->comment('模板类型 0-单表(curd) 1-树表(curd)');
            $table->string('author', 100)->nullable()->default('')->comment('作者');
            $table->string('remark')->nullable()->default('')->comment('备注');
            $table->boolean('generate_type')->default(false)->comment('生成方式  0-压缩包下载 1-生成到模块');
            $table->string('module_name', 100)->nullable()->default('')->comment('模块名');
            $table->string('class_dir', 100)->nullable()->default('')->comment('类目录名');
            $table->string('class_comment', 100)->nullable()->default('')->comment('类描述');
            $table->integer('admin_id')->nullable()->default(0)->comment('管理员id');
            $table->text('menu')->nullable()->comment('菜单配置');
            $table->text('delete')->nullable()->comment('删除配置');
            $table->text('tree')->nullable()->comment('树表配置');
            $table->text('relations')->nullable()->comment('关联配置');
            $table->integer('create_time')->comment('创建时间');
            $table->integer('update_time')->nullable()->comment('修改时间');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generate_table');
    }
};
