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
        Schema::create('dev_pay_way', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pay_config_id')->comment('支付配置ID');
            $table->boolean('scene')->comment('场景:1-微信小程序;2-微信公众号;3-H5;4-PC;5-APP;');
            $table->boolean('is_default')->default(false)->comment('是否默认支付:0-否;1-是;');
            $table->boolean('status')->default(true)->comment('状态:0-关闭;1-开启;');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dev_pay_way');
    }
};
