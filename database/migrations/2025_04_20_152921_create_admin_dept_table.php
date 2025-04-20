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
        Schema::create('admin_dept', function (Blueprint $table) {
            $table->comment('部门关联表');
            $table->integer('admin_id')->default(0)->comment('管理员id');
            $table->integer('dept_id')->default(0)->comment('部门id');

            $table->primary(['admin_id', 'dept_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_dept');
    }
};
