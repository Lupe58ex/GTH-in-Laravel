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
        Schema::create('bonus__discounts', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('quantity',10,2)->nullable(false);
            $table->string('reason',2000)->nullable();
            $table->string('employee_id',20)->nullable(false);
            $table->string('user_id')->nullable(false);
            $table->tinyInteger('month')->nullable(false);
            $table->smallinteger('year')->nullable(false);
            $table->integer('bonus_discount_category_id')->nullable(false);
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
        Schema::dropIfExists('bonus__discounts');
    }
}
