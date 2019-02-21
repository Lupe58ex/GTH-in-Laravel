<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_long',300)->nullable(false);
            $table->string('name_short',30)->nullable(false);
            $table->string('description',1000)->nullable();
            $table->boolean('loan_evaluator')->nullable();
            $table->boolean('loan_promoter')->nullable();
            $table->char('appears_in',1)->nullable(false);
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
        Schema::dropIfExists('roles');
    }
}
