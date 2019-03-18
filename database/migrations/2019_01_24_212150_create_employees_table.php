<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50)->nullable(false);
            $table->string('lastname_father',30)->nullable(false);
            $table->string('lastname_mother',30)->nullable(false);
            $table->string('identity_number',40)->nullable(false)->unique();
            $table->integer('identification_type_id')->nullable(false);
            $table->char('gender',1)->nullable(false);
            $table->date('birthdate')->nullable(false);
            $table->integer('district_id')->nullable(false);
            $table->integer('province_id')->nullable(false);
            $table->integer('department_id')->nullable(false);
            $table->string('address',500)->nullable(false);
            $table->string('address_references',500)->nullable();
            //imagen
            $table->string('address_sketch',1000)->nullable();
            $table->string('email_main',100)->nullable(false);
            $table->string('email_alternative',100)->nullable();
            $table->boolean('enable')->default(true);
            $table->integer('role_id')->nullable(false);
            $table->string('phone_number1',30)->nullable();
            $table->string('phone_number2',30)->nullable();
            $table->string('phone_number3',30)->nullable();
            $table->integer('phone_type1_id')->nullable();
            $table->integer('phone_type2_id')->nullable();
            $table->integer('phone_type3_id')->nullable();
            $table->integer('phone_operator1_id')->nullable();
            $table->integer('phone_operator2_id')->nullable();
            $table->integer('phone_operator3_id')->nullable();
            $table->string('phone_notes1',30)->nullable();
            $table->string('phone_notes2',30)->nullable();
            $table->string('phone_notes3',30)->nullable();
            //imagen
            $table->string('photo')->nullable();
            $table->datetime('date_update_photo')->nullable();
            $table->date('admission_date')->nullable();
            $table->date('hire_date')->nullable();
            $table->date('planning_date')->nullable();
            $table->smallInteger('contract_term')->nullable();
            $table->tinyInteger('contract_type_id')->nullable();
            //imagen
            $table->string('contract_file',1000)->nullable();
            $table->date('real_end_hiredate')->nullable();
            $table->tinyInteger('job_type_id')->nullable();
            $table->char('work_modality',2)->nullable();
            $table->smallInteger('projected_number_time')->nullable(false);
            $table->char('projected_unity_time',2)->nullable();
            $table->date('date_cessation')->nullable();
            $table->string('reason_cessation',1000)->nullable();

            $table->decimal('salary_advance_allowed',5,2)->nullable();
            $table->decimal('salary',9,2)->nullable();
            $table->decimal('payrollsalary',9,2)->nullable();

            $table->string('marital_status',20)->nullable();
            $table->string('home_condition',250)->nullable();
            $table->tinyInteger('number_of_children')->nullable();
            $table->datetime('registerphoto_date')->nullable();
            $table->boolean('availability_travel')->nullable(false);
            $table->smallInteger('area_id')->nullable();
            $table->string('clothing_size',4)->nullable();

            $table->binary('newsletter')->nullable();
            $table->string('linkedln',80)->nullable();
            $table->binary('medical_status')->nullable();

            $table->string('driver_license_number',30)->nullable();
            $table->date('date_expedition_driver_license')->nullable();
            $table->date('date_expiration_driver_license')->nullable();
            $table->string('type_driver_license',15)->nullable();
            //imagen
            $table->binary('file_schedule')->nullable();
            $table->datetime('date_update_schedule')->nullable();

            $table->string('cuspp',20)->nullable();
            $table->string('bank_account_number',150)->nullable();
            $table->char('payment_type',1)->nullable();
            $table->smallInteger('financial_entity_id')->nullable();

            $table->string('bank_account')->nullable();
            $table->boolean('student_children')->nullable();
            $table->smallInteger('agency_id');

            $table->timestamps();

            $table->foreign('identification_type_id')
                  ->references('id')->on('identification_types')
                  ->onDelete('cascade');
            $table->foreign('role_id')
                  ->references('id')->on('roles')
                  ->onDelete('cascade');
            $table->foreign('phone_type1_id')
                  ->references('id')->on('phone_types')
                  ->onDelete('cascade');
            $table->foreign('phone_type2_id')
                  ->references('id')->on('phone_types')
                  ->onDelete('cascade');
            $table->foreign('phone_type3_id')
                  ->references('id')->on('phone_types')
                  ->onDelete('cascade');
            $table->foreign('phone_operator1_id')
                  ->references('id')->on('phone_operators')
                  ->onDelete('cascade');
            $table->foreign('phone_operator2_id')
                  ->references('id')->on('phone_operators')
                  ->onDelete('cascade');
            $table->foreign('phone_operator3_id')
                  ->references('id')->on('phone_operators')
                  ->onDelete('cascade');
            $table->foreign('job_type_id')
                  ->references('id')->on('job_types')
                  ->onDelete('cascade');
            $table->foreign('financial_entity_id')
                  ->references('id')->on('financial_entities')
                  ->onDelete('cascade');
            $table->foreign('area_id')
                  ->references('id')->on('areas')
                  ->onDelete('cascade');
            $table->foreign('contract_type_id')
                  ->references('id')->on('contract_types')
                  ->onDelete('cascade');
            $table->foreign('agency_id')
                  ->references('id')->on('agencies')
                  ->onDelete('cascade');
            $table->foreign('department_id')
                  ->references('id')->on('departments')
                  ->onDelete('cascade');
            $table->foreign('province_id')
                  ->references('id')->on('provinces')
                  ->onDelete('cascade');
            $table->foreign('district_id')
                  ->references('id')->on('districts')
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
            Schema::dropIfExists('employees');
      }


}
