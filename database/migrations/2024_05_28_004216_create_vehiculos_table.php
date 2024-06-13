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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('placa')->unique();
            $table->string('modelo');
            $table->date('fecha_fabri');
            $table->string('pais');
            $table->string('color');
            $table->unsignedBigInteger('dueño');
            $table->timestamps();
            $table-> foreign('dueño')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
