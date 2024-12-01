<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('stock_list', function (Blueprint $table) {
            $table->id();

            $table->string('symbol',50)->default('')->comment('股票代码');
            $table->string('code',50)->default('')->comment('代码');
            $table->string('exchange',50)->default('')->comment('交易所');
            $table->string('type',50)->default('')->comment('股票类型');
            $table->string('name',50)->default('')->comment('股票名称');
            $table->decimal('chg',10)->default(0)->comment('涨跌额');
            $table->decimal('current',10)->default(0)->comment('当前价');
            $table->decimal('current_year_percent',10)->default(0)->comment('年初至今-涨跌幅');
            $table->decimal('percent',10)->default(0)->comment('涨跌幅');
            $table->decimal('volume',20)->default(0)->comment('成交量');
            $table->decimal('amount',20)->default(0)->comment('成交额');
            $table->decimal('turnover_rate',10)->default(0)->comment('换手率');
            $table->decimal('pe_ttm',10)->default(0)->comment('市盈率(TTM)');
            $table->decimal('dividend_yield',10)->default(0)->comment('股息率');
            $table->decimal('market_capital',20)->default(0)->comment('总市值');
            $table->decimal('float_market_capital',20)->default(0)->comment('流通市值');

            $table->timestamps();


            $table->index('symbol','symbol');
            $table->index('code','code');
            $table->index('exchange','exchange');
            $table->index('percent','percent');
            $table->index('current_year_percent','current_year_percent');
            $table->index('market_capital','market_capital');

        });
    }

    public function down()
    {
        Schema::dropIfExists('stock_list');
    }
};
