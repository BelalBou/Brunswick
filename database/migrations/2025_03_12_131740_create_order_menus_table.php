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
        Schema::create('order_menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('remark')->nullable();
            $table->decimal('pricing');
            $table->integer('quantity');
            $table->timestampTz('date')->nullable();
            $table->boolean('article_not_retrieved');
            $table->boolean('deleted');
            $table->timestampTz('created_at');
            $table->timestampTz('updated_at');
            $table->integer('order_id')->nullable();
            $table->integer('menu_id')->nullable();

            $table->unique(['order_id', 'menu_id'], 'order_menus_order_id_menu_id_key');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_menus');
    }
};
