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
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->time('time_limit');
            $table->string('start_period');
            $table->string('end_period');
            $table->string('email_order_cc');
            $table->string('email_supplier_cc');
            $table->string('email_vendor_cc');
            $table->timestampTz('created_at');
            $table->timestampTz('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
