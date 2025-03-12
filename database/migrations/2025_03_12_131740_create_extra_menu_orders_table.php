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
        Schema::create('extra_menu_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('pricing');
            $table->boolean('deleted');
            $table->timestampTz('created_at');
            $table->timestampTz('updated_at');
            $table->integer('extra_id')->nullable();
            $table->integer('order_menu_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extra_menu_orders');
    }
};
