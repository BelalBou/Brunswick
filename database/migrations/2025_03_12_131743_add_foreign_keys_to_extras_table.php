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
        Schema::table('extras', function (Blueprint $table) {
            $table->foreign(['menu_size_id'], 'extras_menu_size_id_fkey')->references(['id'])->on('menu_sizes')->onUpdate('cascade')->onDelete('set null');
            $table->foreign(['supplier_id'], 'extras_supplier_id_fkey')->references(['id'])->on('suppliers')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('extras', function (Blueprint $table) {
            $table->dropForeign('extras_menu_size_id_fkey');
            $table->dropForeign('extras_supplier_id_fkey');
        });
    }
};
