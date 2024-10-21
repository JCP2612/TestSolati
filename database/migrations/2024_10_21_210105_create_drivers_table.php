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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_piloto');
            $table->string('escuderia_actual');
            $table->string('ultimo_gp_ganado');
            $table->string('victorias');
            $table->string('numero_podios');
            $table->string('numero_pole_position');
            $table->string('puntos_campeonato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
