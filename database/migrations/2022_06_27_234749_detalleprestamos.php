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
        Schema::create('detalleprestamos', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('socio_id')->constrained('socios');
            $table->foreignId('prestamo_id')->constrained('prestamos');
            $table->foreignId('cinta_id')->constrained('cintas');
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
        //
    }
};
