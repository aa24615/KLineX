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
        Schema::create('article', function (Blueprint $table) {
            $table->comment('文章表');
            $table->integer('id', true)->comment('文章id');
            $table->integer('cid')->comment('文章分类');
            $table->string('title')->comment('文章标题');
            $table->string('desc')->nullable()->default('')->comment('简介');
            $table->text('abstract')->nullable()->comment('文章摘要');
            $table->string('image', 128)->nullable()->comment('文章图片');
            $table->string('author')->nullable()->default('')->comment('作者');
            $table->text('content')->nullable()->comment('文章内容');
            $table->integer('click_virtual')->nullable()->default(0)->comment('虚拟浏览量');
            $table->integer('click_actual')->nullable()->default(0)->comment('实际浏览量');
            $table->boolean('is_show')->default(true)->comment('是否显示:1-是.0-否');
            $table->integer('sort')->nullable()->default(0)->comment('排序');
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
        Schema::dropIfExists('article');
    }
};
