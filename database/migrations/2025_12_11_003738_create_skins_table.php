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

        // esto crea una tabla con el nombre de skins
        // y crea esas columnas
        Schema::create('skins', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('rareza'); // Común, Raro, Épico, Legendaria
            $table->string('temporada');
            $table->date('fecha_lanzamiento');
            $table->string('imagen');
            $table->string('categoria')->default('normal'); // normal, los_siete
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skins');
    }
};
