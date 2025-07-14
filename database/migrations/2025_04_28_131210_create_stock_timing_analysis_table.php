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
            $table->string('name',100)->nullable()->comment('名称');
            $table->string('where',1000)->nullable()->comment('条件');
            $table->date('start_date')->nullable()->comment('开始日期');

            $table->integer('sample_number')->nullable()->default(0)->comment('分析样本组数');
            $table->integer('symbol_rand_number')->nullable()->default(0)->comment('随机股票数');
            $table->integer('percent')->nullable()->default(0)->comment('涨幅');

            $table->integer('max_sell_count')->nullable()->default(0)->comment('最大卖出次数');
            $table->integer('equity')->nullable()->default(0)->comment('总股本');

            $table->integer('total_min_fee')->nullable()->default(0)->comment('最小盈亏金额');
            $table->integer('total_min_margin')->nullable()->default(0)->comment('最小盈亏率');


            $table->integer('total_max_fee')->nullable()->default(0)->comment('最大盈亏金额');
            $table->integer('total_max_margin')->nullable()->default(0)->comment('最大盈亏率');

            $table->integer('total_fee')->nullable()->default(0)->comment('总盈亏金额');
            $table->integer('total_margin')->nullable()->default(0)->comment('总盈亏率');
            $table->integer('status')->nullable()->default(0)->comment('状态');
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
