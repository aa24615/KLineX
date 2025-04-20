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
        Schema::create('refund_record', function (Blueprint $table) {
            $table->integer('id', true)->comment('id');
            $table->string('sn', 32)->default('')->comment('退款编号');
            $table->integer('user_id')->default(0)->comment('关联用户');
            $table->integer('order_id')->default(0)->comment('来源订单id');
            $table->string('order_sn', 32)->comment('来源单号');
            $table->string('order_type')->nullable()->default('order')->comment('订单来源 order-商品订单 recharge-充值订单');
            $table->decimal('order_amount', 10)->unsigned()->default(0)->comment('订单总的应付款金额，冗余字段');
            $table->decimal('refund_amount', 10)->unsigned()->default(0)->comment('本次退款金额');
            $table->string('transaction_id')->nullable()->comment('第三方平台交易流水号');
            $table->boolean('refund_way')->default(true)->comment('退款方式 1-线上退款 2-线下退款');
            $table->boolean('refund_type')->default(true)->comment('退款类型 1-后台退款');
            $table->unsignedTinyInteger('refund_status')->default(0)->comment('退款状态，0退款中，1退款成功，2退款失败');
            $table->unsignedInteger('create_time')->nullable()->default(0)->comment('创建时间');
            $table->integer('update_time')->nullable()->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refund_record');
    }
};
