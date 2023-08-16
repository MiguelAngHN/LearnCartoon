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
        Schema::create('temas', function (Blueprint $table) {
            $table->id('id_tema');
            $table->string('nombre_tema');
            $table->unsignedBigInteger('id_seccion_fk')->nullable();
            //cramos la relacion a nivel de migraciones
            $table->foreign('id_seccion_fk')
            ->references('id_seccion')
            ->on('seccions')->onDelete('set null');
            $table->timestamps();
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temas');
    }
};
