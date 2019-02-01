<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriminalBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criminal_backgrounds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description',500)->nullable();
            $table->date('expedition_date')->nullable();
            $table->date('expiration_date')->nullable();
            $table->bigInteger('employee_id')->nullable(false);
            $table->binary('file')->nullable();
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
        Schema::dropIfExists('criminal_backgrounds');
    }
}
