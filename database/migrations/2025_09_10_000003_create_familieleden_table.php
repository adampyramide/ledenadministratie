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
        Schema::create('familieleden', function (Blueprint $table) {
            $table->id();
            $table->string('naam', 100);
            $table->date('geboortedatum');
            $table->unsignedBigInteger('familie_id');
            $table->unsignedBigInteger('soort_lid_id');
            $table->timestamps(); //maakt een created_at en updated_at kolom aan
            
            // Foreign keys
            $table->foreign('familie_id')->references('id')->on('families')->onDelete('cascade');
            $table->foreign('soort_lid_id')->references('id')->on('soorten_leden')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('familieleden');
    }
};
