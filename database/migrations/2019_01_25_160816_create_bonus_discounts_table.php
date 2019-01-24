<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBonusDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('bonus_discounts', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('quantity',10,2)->nullable(false);
            $table->string('reason',2000)->nullable();
            $table->bigInteger('employee_id')->nullable(false);
            $table->Integer('user_id')->nullable(false);
            $table->tinyInteger('month')->nullable(false);
            $table->smallInteger('year')->nullable(false);
            $table->Integer('bonus_discount_category_id')->nullable(false);
            $table->timestamps();

            $table->foreign('employee_id')
                ->references('id')->on('employees')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('bonus_discount_category_id')
                ->references('id')->on('bonus_discount_categories')
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
        Schema::dropIfExists('bonus_discounts');
    }
}
