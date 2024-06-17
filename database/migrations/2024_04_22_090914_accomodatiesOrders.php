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
        Schema::create('accomodaties_orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Naam');
            $table->string('Telefoonnummer');
            $table->string('Email');
            $table->date('Datum');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accomodaties_orders');
    }
};
