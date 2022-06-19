<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_empleado',10);
            $table->string('nombre',25);
            $table->string('apellido_paterno',25);
            $table->string('apellido_materno',25);
            $table->string('area_trabajo',25);
            $table->double('sueldo_dia');
            $table->integer('dias_trabajados');
            $table->double('total_neto');
            $table->double('total_bruto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
