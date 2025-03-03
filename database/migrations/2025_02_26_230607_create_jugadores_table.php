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
        Schema::create('jugadores', function (Blueprint $table) {
            $table->id();
            $table->string('cedula',14);
            $table->string('nombre',255);
            $table->string('nombre',255);
            $table->string('universidad', 50);
            $table->string('tipo_deporte',250);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('jugadores');
    }
};
