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
        Schema::create('stock_timing_analysis', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('名称');
            $table->string('where')->nullable()->comment('条件');
            $table->integer('sample_number')->nullable()->comment('样本数');
            $table->integer('symbol_rand_number')->nullable()->comment('随机股票数');
            $table->integer('percent')->nullable()->comment('涨幅');
            $table->integer('max_sell_count')->nullable()->comment('最大卖出次数');
            $table->integer('equity')->nullable()->comment('股本');
            $table->integer('profit_fee')->nullable()->comment('利润金额');
            $table->integer('profit_margin')->nullable()->comment('利润率');
            $table->integer('loss_fee')->nullable()->comment('亏损金额');
            $table->integer('loss_margin')->nullable()->comment('亏损率');
            $table->integer('profit_margin')->nullable()->comment('利润率');
            $table->integer('total_fee')->nullable()->comment('总盈亏金额');
            $table->integer('total_margin')->nullable()->comment('总盈亏率');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_timing_analysis');
    }
};
