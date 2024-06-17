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
        Schema::create('historialrs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idhistorial');
            $table->string('reparacion');
            $table->unsignedBigInteger('idtransaccion');
            $table->string('comentario');
            $table->timestamps();
            $table->foreign('idhistorial')->references('id')->on('historialesvs')->onUpdate('CASCADE');
            $table->foreign('idtransaccion')->references('id')->on('transaccions')->onUpdate('CASCADE');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historialr');
    }
};
