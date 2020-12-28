<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentesEducativosTable extends Migration
{
    public function up()
    {
        Schema::create('agentes_educativos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('documento');
            $table->string('telefono_celular')->nullable();
            $table->string('institucion')->nullable();
            $table->string('rol')->nullable();
            $table->string('modalidad')->nullable();
            $table->string('conectividad')->nullable();
            $table->boolean('terminos')->default(0);
            $table->boolean('privacidad')->default(0)->nullable();
            $table->string('ip')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
