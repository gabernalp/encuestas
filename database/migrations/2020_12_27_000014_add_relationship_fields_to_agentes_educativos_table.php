<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAgentesEducativosTable extends Migration
{
    public function up()
    {
        Schema::table('agentes_educativos', function (Blueprint $table) {
            $table->unsignedBigInteger('departamento_id')->nullable();
            $table->foreign('departamento_id', 'departamento_fk_2815010')->references('id')->on('departamentos');
            $table->unsignedBigInteger('municipio_id')->nullable();
            $table->foreign('municipio_id', 'municipio_fk_2815011')->references('id')->on('ciudades');
        });
    }
}
