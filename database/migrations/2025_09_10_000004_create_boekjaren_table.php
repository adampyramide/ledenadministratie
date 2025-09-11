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
        Schema::create('boekjaren', function (Blueprint $table) {
            $table->id();
            $table->year('jaar');
            $table->timestamps(); //maakt een created_at en updated_at kolom aan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boekjaren');
    }
};
