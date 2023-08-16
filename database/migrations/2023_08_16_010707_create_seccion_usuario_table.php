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
        Schema::create('seccion_usuario', function (Blueprint $table) {
            $table->id('seccion_usuario');

            $table->unsignedBigInteger('id_seccion_fk');
            $table->foreign('id_seccion_fk')->references('id_seccion')->on('seccions')->onDelete('cascade');

            $table->unsignedBigInteger('id_usuario_fk');
            $table->foreign('id_usuario_fk')->references('id_usuario')->on('usuarios')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seccion_usuario');
    }
};
