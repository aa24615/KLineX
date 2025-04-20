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
        Schema::create('dept', function (Blueprint $table) {
            $table->comment('部门表');
            $table->integer('id', true)->comment('id');
            $table->string('name', 30)->default('')->comment('部门名称');
            $table->bigInteger('pid')->default(0)->comment('上级部门id');
            $table->integer('sort')->default(0)->comment('排序');
            $table->string('leader', 64)->nullable()->comment('负责人');
            $table->string('mobile', 16)->nullable()->comment('联系电话');
            $table->boolean('status')->default(false)->comment('部门状态（0停用 1正常）');
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
        Schema::dropIfExists('dept');
    }
};
