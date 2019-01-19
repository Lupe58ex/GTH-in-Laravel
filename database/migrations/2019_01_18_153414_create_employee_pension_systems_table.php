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
            $table->integer('user_id')->nullable(false);
            $table->bigInteger('rate_discount_id')->nullable(false);
            $table->char('comission_type',1)->nullable();
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
        Schema::dropIfExists('employee_pension_systems');
    }
}
