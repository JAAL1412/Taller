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
        Schema::create('historialesvs', function (Blueprint $table) {
            $table->id();
            $table->string('placav');
            $table->datetime('ingreso');
            $table->datetime('salida')->nullable();
            $table->timestamps();
            $table->foreign('placav')->references('placa')->on('vehiculos')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historialesvs');
    }
};
