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
        Schema::create('dev_pay_config', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32)->default('')->comment('模版名称');
            $table->boolean('pay_way')->comment('支付方式:1-余额支付;2-微信支付;3-支付宝支付;');
            $table->text('config')->nullable()->comment('对应支付配置(json字符串)');
            $table->string('icon')->nullable()->comment('图标');
            $table->integer('sort')->nullable()->comment('排序');
            $table->string('remark')->nullable()->comment('备注');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dev_pay_config');
    }
};
