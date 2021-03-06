<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentralRisksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('central_risks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description',150)->nullable();
            $table->binary('file')->nullable(false);
            $table->integer('employee_id')->nullable(false);
            $table->integer('user_id')->nullable(false);
            $table->date('expedition_date')->nullable(false);
            $table->date('expiration_date')->nullable(false);
            $table->timestamps();

            $table->foreign('employee_id')
                  ->references('id')->on('employees')
                  ->onDelete('cascade');
            $table->foreign('user_id')
                  ->references('id')->on('users')
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
        Schema::dropIfExists('central_risks');
    }
}
