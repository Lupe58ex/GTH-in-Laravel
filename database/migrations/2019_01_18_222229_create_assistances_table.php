<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssistancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistances', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->nullable(false);
            $table->bigIntener('employee_id')->nullable(false);
            $table->time('planned_start_hour')->nullable(false);
            $table->time('planned_end_hour')->nullable(false);
            $table->time('real_start_time')->nullable();
            $table->time('real_end_time')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('schedule_id')->nullable();
            $table->string('observation',5000)->nullable();
            $table->boolean('no_attendance')->nullable(false);
            $table->decimal('discount_quantity',6,2)->nullable(false);
            $table->string('observations',2500)->nullable();
            $table->integer('justification')->nullable();
            $table->timestamps();
            
            $table->foreign('employee_id')
                  ->reference('id')->on('employees')
                  ->onDelete('cascade');
            $table->foreign('user_id')
                  ->reference('id')->on('users')
                  ->onDelete('cascade');
            $table->foreign('schedule_id')
                  ->reference('id')->on('schedules')
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
        Schema::dropIfExists('assistances');
    }
}
