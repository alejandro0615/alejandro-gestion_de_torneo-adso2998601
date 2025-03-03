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
        Schema::create('evento_php', function (Blueprint $table) {
            $table->id();
            $table->string('tipo de evento');
            $table->string('equipo_local');
            $table->string('equipo_visitante');
            $table->string('fecha');
            $table->string('hora_inicio');
            $table->string('hora_fin'); 
            $table->string('lugar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento_php');
    }
};
