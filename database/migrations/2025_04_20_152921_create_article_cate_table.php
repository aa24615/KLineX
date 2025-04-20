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
        Schema::create('article_cate', function (Blueprint $table) {
            $table->comment('文章分类表');
            $table->integer('id', true)->comment('文章分类id');
            $table->string('name', 90)->nullable()->comment('分类名称');
            $table->integer('sort')->nullable()->default(0)->comment('排序');
            $table->boolean('is_show')->nullable()->default(true)->comment('是否显示:1-是;0-否');
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
        Schema::dropIfExists('article_cate');
    }
};
