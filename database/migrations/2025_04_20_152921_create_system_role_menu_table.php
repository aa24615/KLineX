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
        Schema::create('system_role_menu', function (Blueprint $table) {
            $table->comment('角色菜单关系表');
            $table->unsignedInteger('role_id')->default(0)->comment('角色ID');
            $table->unsignedInteger('menu_id')->default(0)->comment('菜单ID');

            $table->primary(['role_id', 'menu_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_role_menu');
    }
};
