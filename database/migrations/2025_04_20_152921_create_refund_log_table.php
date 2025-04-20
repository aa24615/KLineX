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
        Schema::create('refund_log', function (Blueprint $table) {
            $table->integer('id', true)->comment('id');
            $table->string('sn', 32)->nullable()->comment('编号');
            $table->integer('record_id')->comment('退款记录id');
            $table->integer('user_id')->default(0)->comment('关联用户');
            $table->integer('handle_id')->default(0)->comment('处理人id（管理员id）');
            $table->decimal('order_amount', 10)->unsigned()->default(0)->comment('订单总的应付款金额，冗余字段');
            $table->decimal('refund_amount', 10)->unsigned()->default(0)->comment('本次退款金额');
            $table->unsignedTinyInteger('refund_status')->default(0)->comment('退款状态，0退款中，1退款成功，2退款失败');
            $table->text('refund_msg')->nullable()->comment('退款信息');
            $table->unsignedInteger('create_time')->nullable()->default(0)->comment('创建时间');
            $table->integer('update_time')->nullable()->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refund_log');
    }
};
