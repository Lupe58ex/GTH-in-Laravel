<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePensionSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pension_systems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',500)->nullable(false);
            $table->string('short_name',20)->nullable(false);
            $table->string('description',1000)->nullable();
            $table->decimal('actual_percent',5,2)->nullable(false);
            $table->decimal('comission_on_flow',9,2)->nullable(false);
            $table->decimal('annual_comission',9,2)->nullable(false);
            $table->decimal('comission_for_flow',9,2)->nullable(false);
            $table->decimal('insurance_premium',9,2)->nullable(false);
            $table->decimal('mandatory_contribution',9,2)->nullable(false);
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
        Schema::dropIfExists('pension_systems');
    }
}
