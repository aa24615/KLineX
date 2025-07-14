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
        Schema::create('stock_timing_analysis_task', function (Blueprint $table) {
            $table->id();
            $table->integer('pid')->nullable()->default(0)->comment('父级id');


            $table->integer('profit_fee')->nullable()->default(0)->comment('利润金额');
            $table->integer('profit_margin')->nullable()->default(0)->comment('利润率');

            $table->integer('loss_fee')->nullable()->default(0)->comment('亏损金额');
            $table->integer('loss_margin')->nullable()->default(0)->comment('亏损率');


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
        Schema::dropIfExists('stock_timing_analysis_task');
    }
};
