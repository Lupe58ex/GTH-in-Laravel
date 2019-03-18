<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('employee_id');
            $table->Integer('schedule_id');
            $table->char('day',1);
            $table->boolean('droped')->default(false);
            $table->timestamps();

            $table->foreign('employee_id')
                  ->references('id')->on('employees')
                  ->onDelete('cascade');
            $table->foreign('schedule_id')
                  ->references('id')->on('schedules')
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
        Schema::dropIfExists('employee_schedule');
    }
}
