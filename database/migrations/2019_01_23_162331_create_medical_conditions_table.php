<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_conditions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description',500)->nullable();
            $table->integer('user_id')->nullable(false);
            $table->date('expedition_date')->nullable();
            $table->integer('employee_id')->nullable(false);
            $table->binary('document')->nullable();
            $table->date('expired_date')->nullable(false);
            $table->boolean('removed')->nullable();
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
        Schema::dropIfExists('medical_conditions');
    }
}
