<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatsOwnersAnwersTable extends Migration
{
    public function up()
    {
        Schema::create('cats_owners_anwers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('cat_appear');
            $table->string('other_1')->nullable();
            $table->string('cat_consideration');
            $table->string('other_2')->nullable();
            $table->string('cat_food_advice');
            $table->string('cat_food_choose');
            $table->string('other_4')->nullable();
            $table->string('cat_diff_nutrition');
            $table->string('cat_diet_owner');
            $table->string('cat_food_type');
            $table->boolean('diamond_naturals_8')->default(0)->nullable();
            $table->boolean('purina_8')->default(0)->nullable();
            $table->boolean('mars_8')->default(0)->nullable();
            $table->boolean('whiskas_8')->default(0)->nullable();
            $table->string('other_8')->nullable();
            $table->string('cat_percent_concentrate');
            $table->string('cat_candies')->nullable();
            $table->string('cat_change_food');
            $table->boolean('general_consultation_12')->default(0)->nullable();
            $table->boolean('dermatological_disease_12')->default(0)->nullable();
            $table->boolean('digestive_disease_12')->default(0)->nullable();
            $table->boolean('periodontal_disease_12')->default(0)->nullable();
            $table->boolean('neuro_problems_12')->default(0)->nullable();
            $table->boolean('metabolic_disease_12')->default(0)->nullable();
            $table->boolean('orthopedic_problems_12')->default(0)->nullable();
            $table->boolean('emergency_case_12')->default(0)->nullable();
            $table->string('other_12')->nullable();
            $table->longText('cat_actual_disease')->nullable();
            $table->boolean('avoid_obesity_14')->default(0)->nullable();
            $table->boolean('read_food_tags_14')->default(0)->nullable();
            $table->boolean('healthy_snacks_14')->default(0)->nullable();
            $table->boolean('diets_switch_14')->default(0)->nullable();
            $table->boolean('food_by_grow_14')->default(0)->nullable();
            $table->boolean('food_by_physical_14')->default(0)->nullable();
            $table->boolean('more_info_14')->default(0)->nullable();
            $table->string('other_14')->nullable();
            $table->string('heard_about_pfi');
            $table->string('ip')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
