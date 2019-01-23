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
            $table->integer('user_id')->nullable(false);
            $table->date('expedition_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->string('employee_id',20)->nullable(false);
            $table->binary('document')->nullable();
            $table->boolean('removed')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                    ->reference('id')->on('users')
                    ->onDelete('cascade');
            $table->foreign('employee_id')
                    ->reference('id')->on('employees')
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
