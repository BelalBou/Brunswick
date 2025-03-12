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
        Schema::create('extra_menus', function (Blueprint $table) {
            $table->boolean('deleted');
            $table->timestampTz('created_at');
            $table->timestampTz('updated_at');
            $table->integer('menu_id');
            $table->integer('extra_id');

            $table->primary(['menu_id', 'extra_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extra_menus');
    }
};
