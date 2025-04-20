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
        Schema::create('user_account_log', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sn', 32)->default('')->comment('流水号');
            $table->integer('user_id')->comment('用户id');
            $table->boolean('change_object')->default(false)->comment('变动对象');
            $table->smallInteger('change_type')->comment('变动类型');
            $table->boolean('action')->default(false)->comment('动作 1-增加 2-减少');
            $table->decimal('change_amount', 10)->comment('变动数量');
            $table->decimal('left_amount', 10)->default(100)->comment('变动后数量');
            $table->string('source_sn')->nullable()->comment('关联单号');
            $table->string('remark')->nullable()->default('')->comment('备注');
            $table->text('extra')->nullable()->comment('预留扩展字段');
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
        Schema::dropIfExists('user_account_log');
    }
};
