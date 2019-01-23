<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('month')->nullable(false);
            $table->smallInteger('year')->nullable(false);
            $table->integer('employee_pension_system_id')->nullable(false);
            $table->decimal('percent_discount',5,2)->nullable(false);
            $table->decimal('discount_quantity',9,2)->nullable(false);
            $table->integer('user_id')->nullable(false);
            $table->string('observations',1500)->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->reference('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('employee_pension_system_id')
                ->reference('id')->on('employee_pension_systems')
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
        Schema::dropIfExists('discounts');
    }
}
