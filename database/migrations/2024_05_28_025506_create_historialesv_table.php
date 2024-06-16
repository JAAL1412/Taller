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
        Schema::create('historialesv', function (Blueprint $table) {
            $table->id();
            $table->string('placav');
            $table->datetime('ingreso');
            $table->datetime('salida');
            $table->timestamps();
            $table->foreign('placav')->references('placa')->on('vehiculos')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historialesv');
    }
};
