<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->increments('id');
            $table->date('start_date')->nullable(false);
            $table->date('end_date')->nullable(false);
            $table->datetime('start_hour')->nullable(false);
            $table->datetime('end_hour')->nullable(false);
            $table->char('pension_option',3)->nullable(false);
            $table->integer('user_id')->nullable(false);
            $table->bigInteger('employee_id')->nullable(false);
            $table->string('reason',1000)->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('licenses');
    }
}
