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
        Schema::table('allergy_menus', function (Blueprint $table) {
            $table->foreign(['allergy_id'], 'allergy_menus_allergy_id_fkey')->references(['id'])->on('allergies')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['menu_id'], 'allergy_menus_menu_id_fkey')->references(['id'])->on('menus')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('allergy_menus', function (Blueprint $table) {
            $table->dropForeign('allergy_menus_allergy_id_fkey');
            $table->dropForeign('allergy_menus_menu_id_fkey');
        });
    }
};
