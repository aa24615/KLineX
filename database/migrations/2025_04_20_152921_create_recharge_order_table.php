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
        Schema::create('recharge_order', function (Blueprint $table) {
            $table->integer('id', true)->comment('id');
            $table->string('sn', 64)->comment('订单编号');
            $table->integer('user_id')->comment('用户id');
            $table->string('pay_sn')->nullable()->default('')->comment('支付编号-冗余字段，针对微信同一主体不同客户端支付需用不同订单号预留。');
            $table->tinyInteger('pay_way')->default(2)->comment('支付方式 2-微信支付 3-支付宝支付');
            $table->boolean('pay_status')->default(false)->comment('支付状态：0-待支付；1-已支付');
            $table->integer('pay_time')->nullable()->comment('支付时间');
            $table->decimal('order_amount', 10)->comment('充值金额');
            $table->boolean('order_terminal')->nullable()->default(true)->comment('终端');
            $table->string('transaction_id', 128)->nullable()->comment('第三方平台交易流水号');
            $table->boolean('refund_status')->nullable()->default(false)->comment('退款状态 0-未退款 1-已退款');
            $table->string('refund_transaction_id')->nullable()->comment('退款交易流水号');
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
        Schema::dropIfExists('recharge_order');
    }
};
