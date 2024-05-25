<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * TODO: es cuando se ejecuta una migración.
     */
    public function up(): void
    {
        Schema::create('miembros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_apellido',255);
            $table->string('direccion',255);
            $table->string('telefono',100);
            $table->string('fecha_nacimiento',100);
            $table->string('genero',50);
            $table->string('email',255)->unique();
            $table->string('estado',5);
            $table->string('curso',150);
            $table->text('fotografia');
            $table->string('fecha_ingreso',50);
            $table->timestamps();
        });
    }

    /**
     * TODO: se revierte una migración realizada.
     */
    public function down(): void
    {
        Schema::dropIfExists('miembros');
    }
};
