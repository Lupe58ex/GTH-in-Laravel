<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCessationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cessations', function (Blueprint $table) {
            $table->increments('id');
            $table->date('entry_date')->nullable(false);
            $table->string('entry_reason',1000)->nullable();
            $table->date('cessation_date')->nullable();
            $table->string('cessation_reason',1000)->nullable();
            $table->integer('employee_id')->nullable(false);
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
        Schema::dropIfExists('cessations');
    }
}
