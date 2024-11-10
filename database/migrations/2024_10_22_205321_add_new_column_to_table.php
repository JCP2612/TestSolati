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
        Schema::table('scuderias', function (Blueprint $table) {
            $table->string('bandera_scuderia');
            $table->string('imagen_scuderia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('scuderias', function (Blueprint $table) {
            //
        });
    }
};
