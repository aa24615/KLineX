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
        Schema::create('hot_search', function (Blueprint $table) {
            $table->comment('热门搜索表');
            $table->increments('id')->comment('主键');
            $table->string('name', 200)->default('')->comment('关键词');
            $table->unsignedSmallInteger('sort')->default(0)->comment('排序号');
            $table->integer('create_time')->nullable()->comment('创建时间');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hot_search');
    }
};
