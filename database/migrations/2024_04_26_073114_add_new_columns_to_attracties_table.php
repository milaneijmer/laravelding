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
        Schema::table('attracties', function (Blueprint $table) {
            $table->string('Lengte');
            $table->float('Snelheid');
            $table->float('GKracht');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('attracties', function (Blueprint $table) {
            $table->dropColumn('Lengte');
            $table->dropColumn('Snelheid');
            $table->dropColumn('GKracht');
        });
    }
};
