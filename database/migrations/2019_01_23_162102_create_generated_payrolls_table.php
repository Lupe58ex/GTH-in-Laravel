<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneratedPayrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generated_payrolls', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('month')->nullable(false);
            $table->smallinteger('year')->nullable(false);
            $table->string('employee_id',20)->nullable(false);
            $table->decimal('real_salary',10,2)->nullable(false);
            $table->decimal('payroll_salary',10,2)->nullable(false);
            $table->decimal('quantity_consider',10,2)->nullable(false);
            $table->decimal('household_allowance',10,2)->nullable(false);
            $table->decimal('role_bonus',10,2)->nullable(false);
            $table->decimal('bonus',10,2)->nullable(false);
            $table->decimal('commission',10,2)->nullable(false);
            $table->decimal('holiday_bonus',10,2)->nullable(false);
            $table->decimal('salary_advance',10,2)->nullable(false);
            $table->decimal('discount',10,2)->nullable(false);
            $table->decimal('permit',10,2)->nullable(false);
            $table->decimal('license',10,2)->nullable(false);
            $table->decimal('tardiness',10,2)->nullable(false);
            $table->decimal('onp',10,2)->nullable(false);
            $table->decimal('pension_system',10,2)->nullable(false);
            $table->decimal('essalud',10,2)->nullable(false);
            $table->decimal('business_quantity',10,2)->nullable(false);
            $table->decimal('employee_quantity',10,2)->nullable(false);
            $table->timestamps();

            $table->foreign('employee_id')
                    ->reference('id')->on('employees')
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
        Schema::dropIfExists('generated_payrolls');
    }
}
