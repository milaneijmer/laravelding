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
        Schema::create('accombestellijn', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('BestelId');
            $table->integer('AccomodatieId');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accombestellijn');
    }
};
