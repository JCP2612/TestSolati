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
        Schema::create('scuderias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_scuderia');
            $table->string('pais_de_origen');
            $table->string('fecha_de_creacion');
            $table->string('pagina_web');
            $table->string('ultima_gp_ganado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scuderias');
    }
};
