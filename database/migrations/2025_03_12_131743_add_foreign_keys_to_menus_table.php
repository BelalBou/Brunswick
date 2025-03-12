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
        Schema::table('menus', function (Blueprint $table) {
            $table->foreign(['category_id'], 'menus_category_id_fkey')->references(['id'])->on('categories')->onUpdate('cascade')->onDelete('set null');
            $table->foreign(['menu_size_id'], 'menus_menu_size_id_fkey')->references(['id'])->on('menu_sizes')->onUpdate('cascade')->onDelete('set null');
            $table->foreign(['supplier_id'], 'menus_supplier_id_fkey')->references(['id'])->on('suppliers')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->dropForeign('menus_category_id_fkey');
            $table->dropForeign('menus_menu_size_id_fkey');
            $table->dropForeign('menus_supplier_id_fkey');
        });
    }
};
