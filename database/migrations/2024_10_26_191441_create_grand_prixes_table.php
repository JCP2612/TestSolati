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
        Schema::create('grand_prixes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_gp');
            $table->string('ubicacion');
            $table->string('numero_vueltas');
            $table->string('numero_kilometros');
            $table->string('ultimo_ganador');
            $table->string('pilotos_victorias');
            $table->string('mejor_record');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grand_prixes');
    }
};
