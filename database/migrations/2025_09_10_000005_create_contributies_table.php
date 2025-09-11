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
        Schema::create('contributies', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('leeftijd');
            $table->decimal('bedrag', 8, 2);
            $table->unsignedBigInteger('soort_lid_id');
            $table->unsignedBigInteger('boekjaar_id');
            
            // Foreign keys
            $table->foreign('soort_lid_id')->references('id')->on('soorten_leden')->onDelete('cascade');
            $table->foreign('boekjaar_id')->references('id')->on('boekjaren')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contributies');
    }
};
