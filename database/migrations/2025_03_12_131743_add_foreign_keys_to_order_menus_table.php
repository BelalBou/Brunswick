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
        Schema::table('order_menus', function (Blueprint $table) {
            $table->foreign(['menu_id'], 'order_menus_menu_id_fkey')->references(['id'])->on('menus')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['order_id'], 'order_menus_order_id_fkey')->references(['id'])->on('orders')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_menus', function (Blueprint $table) {
            $table->dropForeign('order_menus_menu_id_fkey');
            $table->dropForeign('order_menus_order_id_fkey');
        });
    }
};
