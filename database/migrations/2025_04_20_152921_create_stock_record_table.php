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
        Schema::create('stock_record', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date')->index('date')->comment('日期');
            $table->string('symbol', 50)->default('')->index('symbol')->comment('股票代码');
            $table->string('code', 50)->default('')->index('code')->comment('代码');
            $table->string('exchange', 50)->default('')->index('exchange')->comment('交易所');
            $table->string('type', 50)->default('')->comment('股票类型');
            $table->string('name', 50)->default('')->comment('股票名称');
            $table->decimal('chg', 10)->default(0)->comment('涨跌额');
            $table->decimal('current', 10)->default(0)->comment('当前价');
            $table->decimal('current_year_percent', 10)->default(0)->index('current_year_percent')->comment('年初至今-涨跌幅');
            $table->decimal('percent', 10)->default(0)->index('percent')->comment('涨跌幅');
            $table->decimal('volume', 20)->default(0)->comment('成交量');
            $table->decimal('amount', 20)->default(0)->comment('成交额');
            $table->decimal('turnover_rate', 10)->default(0)->comment('换手率');
            $table->decimal('pe_ttm', 10)->default(0)->comment('市盈率(TTM)');
            $table->decimal('dividend_yield', 10)->default(0)->comment('股息率');
            $table->decimal('market_capital', 20)->default(0)->index('market_capital')->comment('总市值');
            $table->decimal('float_market_capital', 20)->default(0)->comment('流通市值');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_record');
    }
};
