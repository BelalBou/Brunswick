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
        Schema::table('extra_menu_orders', function (Blueprint $table) {
            $table->foreign(['extra_id'], 'extra_menu_orders_extra_id_fkey')->references(['id'])->on('extras')->onUpdate('cascade')->onDelete('set null');
            $table->foreign(['order_menu_id'], 'extra_menu_orders_order_menu_id_fkey')->references(['id'])->on('order_menus')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('extra_menu_orders', function (Blueprint $table) {
            $table->dropForeign('extra_menu_orders_extra_id_fkey');
            $table->dropForeign('extra_menu_orders_order_menu_id_fkey');
        });
    }
};
