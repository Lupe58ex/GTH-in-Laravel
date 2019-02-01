<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeePensionSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_pension_systems', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pension_system_id')->nullable(false);
            $table->integer('employee_id')->nullable(false);
            $table->boolean('actual')->nullable(false);
            $table->char('comission_type',1)->nullable();

            $table->timestamps();

            $table->foreign('employee_id')
                ->references('id')->on('employees')
                ->onDelete('cascade');
            $table->foreign('pension_system_id')
                ->references('id')->on('pension_systems')
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
        Schema::dropIfExists('employee_pension_systems');
    }
}
