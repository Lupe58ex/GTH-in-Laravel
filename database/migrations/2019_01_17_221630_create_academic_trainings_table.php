<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_trainings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description',150)->nullable(false);
            $table->string('institute',300)->nullable(false);
            $table->string('period',100)->nullable(false);
            $table->string('condition',50)->nullable(false);
            $table->integer('user_id')->nullable(false);
            $table->integer('employee_id')->nullable(false);
            $table->timestamps();

            $table->foreign('employee_id')
                  ->reference('id')->on('employees')
                  ->onDelete('cascade');
            $table->foreign('user_id')
                  ->reference('id')->on('users')
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
        Schema::dropIfExists('academic_trainings');
    }
}
