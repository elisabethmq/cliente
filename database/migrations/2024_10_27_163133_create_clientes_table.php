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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id_cliente');
            $table->string('dni_cliente',8);
            $table->string('nombre_cliente',25);
            $table->string('apellido_cliente',50);
            $table->string('direccion_cliente',80);
            $table->string('telefono_cliente',12);
            $table->string('email_cliente',100);
            $table->date('fecha_registro_cliente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
