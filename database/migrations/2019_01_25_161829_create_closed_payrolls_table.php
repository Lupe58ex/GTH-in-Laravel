<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClosedPayrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('closed_payrolls', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('month')->nullable(false);
            $table->smallinteger('year')->nullable(false);
            $table->integer('user_id')->nullable();
            $table->string('observation',2500)->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('closed_payrolls');
    }
}
