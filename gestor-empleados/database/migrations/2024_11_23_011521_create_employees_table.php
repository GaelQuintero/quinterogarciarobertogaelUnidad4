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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('idEmployee'); // Definir idEmployee como la clave primaria y autoincremental
            $table->string('name', 50); // Campo para el nombre
            $table->string('lastName', 50); // Campo para el apellido
            $table->integer('numberEmployee'); // Campo para el número de empleado
            $table->string('position', 50); // Campo para la posición
            $table->string('dateRegister', 50); // Campo para la fecha de registro
            $table->timestamps(); // Registra las fechas de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees'); // Eliminar la tabla employees si existe
    }
};
