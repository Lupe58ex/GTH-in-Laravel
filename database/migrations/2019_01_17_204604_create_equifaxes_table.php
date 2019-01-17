<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquifaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equifaxes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description',150)->nullable();
            $table->binary('file')->nullable(false);
            $table->integer('employee_id')->nullable(false);
            $table->integer('user_id')->nullable(false);
            $table->date('generation_date')->nullable(false);
            $table->date('expire_date')->nullable(false);
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
        Schema::dropIfExists('equifaxes');
    }
}
