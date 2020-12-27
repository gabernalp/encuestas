<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCiudadesTable extends Migration
{
    public function up()
    {
        Schema::table('ciudades', function (Blueprint $table) {
            $table->unsignedBigInteger('departamento_id')->nullable();
            $table->foreign('departamento_id', 'departamento_fk_2816312')->references('id')->on('departamentos');
        });
    }
}
