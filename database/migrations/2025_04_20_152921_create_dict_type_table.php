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
        Schema::create('dict_type', function (Blueprint $table) {
            $table->comment('字典类型表');
            $table->integer('id', true)->comment('id');
            $table->string('name')->default('')->comment('字典名称');
            $table->string('type')->default('')->comment('字典类型名称');
            $table->boolean('status')->default(false)->comment('状态 0-停用 1-正常');
            $table->string('remark')->nullable()->default('')->comment('备注');
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
        Schema::dropIfExists('dict_type');
    }
};
