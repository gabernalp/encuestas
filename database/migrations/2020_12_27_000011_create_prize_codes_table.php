<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrizeCodesTable extends Migration
{
    public function up()
    {
        Schema::create('prize_codes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->nullable();
            $table->string('poll_name')->nullable();
            $table->string('contestant')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
