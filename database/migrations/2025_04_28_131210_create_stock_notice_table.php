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
        Schema::create('stock_notice', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('名称');
            $table->string('type')->nullable()->comment('通知类型，如email, dingtalk, wechat');
            $table->string('recipient')->nullable()->comment('接收者，如邮箱地址、钉钉机器人URL等');
            $table->text('content')->nullable()->comment('通知内容模板');
            $table->boolean('status')->default(true)->comment('是否启用');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_notice');
    }
};
