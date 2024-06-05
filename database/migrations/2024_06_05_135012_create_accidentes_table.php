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
        Schema::create('accidentes', function (Blueprint $table) {
            $table->id();
            $table->time('hora');
            $table->date('fecha');
            $table->string('codigo')->unique();
            $table->string('lugar');
            $table->foreignId('persona_id')->constrained('personas')->onDelete('cascade');
            $table->foreignId('vehiculo_id')->constrained('vehiculos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accidentes');
    }
};
