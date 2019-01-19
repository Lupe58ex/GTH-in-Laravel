<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJustificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('justifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reason',2500)->nullable(false);
            $table->date('justified_date')->nullable(false);
            $table->integer('schedule_id')->nullable(false);
            $table->integer('user_id')->nullable(false);
            $table->string('observation',2500)->nullable();
            $table->boolean('is_discount')->nullable(false);
            $table->timestamps();

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
        Schema::dropIfExists('justifications');
    }
}
