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
        Schema::create('file_cate', function (Blueprint $table) {
            $table->comment('文件分类表');
            $table->increments('id')->comment('主键ID');
            $table->unsignedInteger('pid')->default(0)->comment('父级ID');
            $table->unsignedTinyInteger('type')->default(10)->comment('类型[10=图片，20=视频，30=文件]');
            $table->string('name', 32)->default('')->comment('分类名称');
            $table->unsignedInteger('create_time')->nullable()->comment('创建时间');
            $table->unsignedInteger('update_time')->nullable()->comment('更新时间');
            $table->unsignedInteger('delete_time')->nullable()->comment('删除时间');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_cate');
    }
};
