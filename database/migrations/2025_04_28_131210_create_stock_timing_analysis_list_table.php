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
        Schema::create('stock_timing_analysis_list', function (Blueprint $table) {
            $table->id();
            $table->integer('pid')->nullable()->default(0)->comment('父级id');

            $table->string('symbol',100)->nullable()->default('')->comment('股票代码');

            $table->integer('equity')->nullable()->default(0)->comment('股本');
            $table->integer('balance')->nullable()->default(0)->comment('余额');
            $table->integer('market')->nullable()->default(0)->comment('市值');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_timing_analysis_list');
    }
};
