<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;
    protected $fillable=[
        "codigo_empleado",
        "nombre",
        "apellido_paterno",
        "apellido_materno",
        "area_trabajo",
        "sueldo_dia",
        "dias_trabajados",
        "total_neto",
        "total_bruto"];
}
