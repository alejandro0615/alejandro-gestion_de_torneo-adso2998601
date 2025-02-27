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
        Schema::create('escenario_deportivo_php', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_escenario');
            $table->string('equipo_local');
            $table->string('equipo_visitante');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escenario_deportivo_php');
    }
};
