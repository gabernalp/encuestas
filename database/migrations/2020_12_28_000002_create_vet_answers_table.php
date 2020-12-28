<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVetAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('vet_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('vet_clinic')->nullable();
            $table->string('vet_university')->nullable();
            $table->string('pet_shelters')->nullable();
            $table->string('pet_nutrition_question');
            $table->integer('recomendations_applied')->nullable();
            $table->string('percent_apply_diet');
            $table->string('difficulty_change_food_owners');
            $table->boolean('obesity_5')->default(0)->nullable();
            $table->boolean('malnutrition_5')->default(0)->nullable();
            $table->boolean('allergies_5')->default(0)->nullable();
            $table->boolean('gastritis_5')->default(0)->nullable();
            $table->boolean('diarrhea_5')->default(0)->nullable();
            $table->boolean('periodontal_5')->default(0)->nullable();
            $table->string('other_disease_5')->nullable();
            $table->string('other_5')->nullable();
            $table->boolean('mix_food_6')->default(0)->nullable();
            $table->boolean('food_outtime')->default(0)->nullable();
            $table->boolean('water_not_enough')->default(0)->nullable();
            $table->boolean('quantities_control')->default(0)->nullable();
            $table->boolean('plate_higiene')->default(0)->nullable();
            $table->string('other_bad_habit')->nullable();
            $table->string('other_6')->nullable();
            $table->string('food_type_recommendation');
            $table->string('food_recomendation_concentrates');
            $table->string('percent_calories_concentrates');
            $table->longText('country_best_food');
            $table->string('if_us_best_food');
            $table->string('other_11')->nullable();
            $table->string('not_recommended_food');
            $table->string('frecuency_education');
            $table->string('heard_about_pfi');
            $table->string('ip')->nullable();
            $table->string('email');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
