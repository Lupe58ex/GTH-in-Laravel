<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->time('start_hour')->nullable(false);
            $table->time('end_hour')->nullable(false);
            $table->string('description',1500)->nullable();
            $table->integer('user1_id')->nullable(false);
            $table->boolean('droped')->nullable(false);
            $table->integer('user2_id')->nullable();
            $table->timestamps();

            $table->foreign('user1_id')
                  ->reference('id')->on('users')
                  ->onDelete('cascade');
            $table->foreign('user2_id')
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
        Schema::dropIfExists('schedules');
    }
}
