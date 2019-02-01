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
            $table->date('expedition_date')->nullable();
            $table->integer('employee_id')->nullable(false);
            $table->binary('file')->nullable();
            $table->date('expiration_date')->nullable(false);
            $table->boolean('droped')->nullable();
            $table->timestamps();

            $table->foreign('employee_id')
                  ->references('id')->on('employees')
                  ->onDelete('cascade');
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
