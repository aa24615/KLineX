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
        Schema::create('generate_column', function (Blueprint $table) {
            $table->comment('代码生成表字段信息表');
            $table->integer('id', true)->comment('id');
            $table->integer('table_id')->default(0)->comment('表id');
            $table->string('column_name', 100)->default('')->comment('字段名称');
            $table->string('column_comment', 300)->default('')->comment('字段描述');
            $table->string('column_type', 100)->default('')->comment('字段类型');
            $table->boolean('is_required')->nullable()->default(false)->comment('是否必填 0-非必填 1-必填');
            $table->boolean('is_pk')->nullable()->default(false)->comment('是否为主键 0-不是 1-是');
            $table->boolean('is_insert')->nullable()->default(false)->comment('是否为插入字段 0-不是 1-是');
            $table->boolean('is_update')->nullable()->default(false)->comment('是否为更新字段 0-不是 1-是');
            $table->boolean('is_lists')->nullable()->default(false)->comment('是否为列表字段 0-不是 1-是');
            $table->boolean('is_query')->nullable()->default(false)->comment('是否为查询字段 0-不是 1-是');
            $table->string('query_type', 100)->nullable()->default('=')->comment('查询类型');
            $table->string('view_type', 100)->nullable()->default('input')->comment('显示类型');
            $table->string('dict_type')->nullable()->default('')->comment('字典类型');
            $table->integer('create_time')->comment('创建时间');
            $table->integer('update_time')->nullable()->comment('修改时间');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generate_column');
    }
};
