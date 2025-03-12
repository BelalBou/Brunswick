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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email_address');
            $table->boolean('for_vendor_only');
            $table->boolean('deleted');
            $table->timestampTz('created_at');
            $table->timestampTz('updated_at');
            $table->date('away_start')->nullable();
            $table->date('away_end')->nullable();
            $table->string('email_address2')->nullable()->default('');
            $table->string('email_address3')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
