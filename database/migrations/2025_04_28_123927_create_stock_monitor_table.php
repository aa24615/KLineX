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
        Schema::create('stock_monitor', function (Blueprint $table) {
            $table->id();
            $table->string('where')->nullable()->comment('监控条件');
            $table->string('cycle')->default('1')->nullable()->comment('周期');
            $table->string('notice')->nullable()->comment('通知');
            $table->boolean('status')->default(true)->nullable()->comment('启用状态');
            $table->boolean('complete')->default(false)->nullable()->comment('是否完成');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_monitor');
    }
};
