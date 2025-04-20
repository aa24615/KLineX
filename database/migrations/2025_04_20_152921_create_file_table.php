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
        Schema::create('file', function (Blueprint $table) {
            $table->comment('文件表');
            $table->increments('id')->comment('主键ID');
            $table->unsignedInteger('cid')->default(0)->comment('类目ID');
            $table->unsignedInteger('source_id')->default(0)->comment('上传者id');
            $table->boolean('source')->default(false)->comment('来源类型[0-后台,1-用户]');
            $table->unsignedTinyInteger('type')->default(10)->comment('类型[10=图片, 20=视频]');
            $table->string('name')->default('')->comment('文件名称');
            $table->string('uri', 200)->comment('文件路径');
            $table->unsignedInteger('create_time')->nullable()->comment('创建时间');
            $table->integer('update_time')->nullable()->comment('更新时间');
            $table->integer('delete_time')->nullable()->comment('删除时间');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file');
    }
};
