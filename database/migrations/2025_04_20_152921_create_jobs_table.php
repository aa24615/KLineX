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
        Schema::create('jobs', function (Blueprint $table) {
            $table->comment('岗位表');
            $table->integer('id', true)->comment('id');
            $table->string('name', 50)->comment('岗位名称');
            $table->string('code', 64)->comment('岗位编码');
            $table->integer('sort')->nullable()->default(0)->comment('显示顺序');
            $table->boolean('status')->default(false)->comment('状态（0停用 1正常）');
            $table->string('remark', 500)->nullable()->comment('备注');
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
        Schema::dropIfExists('jobs');
    }
};
