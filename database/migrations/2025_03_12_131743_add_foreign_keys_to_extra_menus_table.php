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
        Schema::table('extra_menus', function (Blueprint $table) {
            $table->foreign(['extra_id'], 'extra_menus_extra_id_fkey')->references(['id'])->on('extras')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['menu_id'], 'extra_menus_menu_id_fkey')->references(['id'])->on('menus')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('extra_menus', function (Blueprint $table) {
            $table->dropForeign('extra_menus_extra_id_fkey');
            $table->dropForeign('extra_menus_menu_id_fkey');
        });
    }
};
