<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBonusDiscountCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bonus_discount_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',250);
            $table->string('description',2000)->nullable();
            $table->boolean('enable')->default(true);
            $table->char('appears_in',1);
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
        Schema::dropIfExists('bonus_discount_categories');
    }
}
