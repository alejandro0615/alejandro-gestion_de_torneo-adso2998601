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
            $table->string('nombre escenario');
            $table->string('equipo local');
            $table->string('equipo visitante');
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
