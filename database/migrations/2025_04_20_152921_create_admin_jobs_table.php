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
        Schema::create('admin_jobs', function (Blueprint $table) {
            $table->comment('岗位关联表');
            $table->integer('admin_id')->comment('管理员id');
            $table->integer('jobs_id')->comment('岗位id');

            $table->primary(['admin_id', 'jobs_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_jobs');
    }
};
