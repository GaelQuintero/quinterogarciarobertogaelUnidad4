<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla en la base de datos
    protected $table = 'employees';

    // Opcional: Define los campos que se pueden asignar masivamente
    protected $fillable = [
        'idEmployee',
        'name',
        'lastName', // Cambia esto según los nombres de las columnas en tu tabla
        'numberEmployee',
        'position',    // Ejemplo: puesto del empleado
        'dateRegister',      // Ejemplo: salario
    ];

    // Si no usas timestamps en tu tabla, desactívalos
    public $timestamps = false;
}
