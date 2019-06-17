<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeRelativeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_relative', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('employee1_id')->nullable(false);
            $table->bigInteger('employee_id')->nullable(false);
            $table->bigInteger('relative_id')->nullable(false);
            $table->string('relationship',50)->nullable(false);
            $table->string('observation',1500)->nullable();
            $table->binary('bail_letter')->nullable();
            $table->boolean('guarantor')->default(false);
            $table->boolean('droped')->nullable();
            $table->timestamps();

            $table->foreign('employee1_id')
                  ->references('id')->on('employees')
                  ->onDelete('cascade');
            $table->foreign('employee_id')
                  ->references('id')->on('employees')
                  ->onDelete('cascade');
            $table->foreign('relative_id')
                  ->references('id')->on('relatives')
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
        Schema::dropIfExists('employee_relative');
    }
}
