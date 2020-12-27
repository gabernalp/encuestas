<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToVetAnswersTable extends Migration
{
    public function up()
    {
        Schema::table('vet_answers', function (Blueprint $table) {
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id', 'department_fk_2866657')->references('id')->on('departamentos');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id', 'city_fk_2866658')->references('id')->on('ciudades');
        });
    }
}
