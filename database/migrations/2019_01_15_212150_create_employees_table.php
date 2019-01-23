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
            $table->string('identity_number',40)->nullable(false);
            $table->integer('identification_type_id')->nullable(false);
            $table->char('gender',1)->nullable(false);
            $table->date('birthdate')->nullable(false);
            $table->string('district',100)->nullable(false);
            $table->string('province',100)->nullable(false);
            $table->string('department',100)->nullable(false);
            $table->integer('via_id')->nullable(false);
            $table->string('address',500)->nullable(false);
            $table->string('address_reference',500)->nullable(false);
            $table->binary('address_sketch')->nullable();
            $table->string('email_main',100)->nullable(false);
            $table->string('email_alternative',100)->nullable(false);
            $table->boolean('active')->nullable(false);
            $table->integer('position_id')->nullable(false);
            $table->string('phone_number01',30)->nullable();
            $table->string('phone_number02',30)->nullable();
            $table->string('phone_number03',30)->nullable();
            $table->integer('phone_type1_id')->nullable();
            $table->integer('phone_type2_id')->nullable();
            $table->integer('phone_type3_id')->nullable();
            $table->integer('phone_operator1_id')->nullable();
            $table->integer('phone_operator2_id')->nullable();
            $table->integer('phone_operator3_id')->nullable();
            $table->string('phone_notes01',30)->nullable();
            $table->string('phone_notes02',30)->nullable();
            $table->string('phone_notes03',30)->nullable();
            $table->binary('photo')->nulllable();
            $table->datetime('date_update_photo')->nullable();
            $table->integer('role_id')->nullable(false);
            $table->date('admission_date')->nullable();
            $table->date('hire_date')->nullable();
            $table->date('planning_date')->nullable();
            $table->smallinteger('contract_term')->nullable();
            $table->tinyInteger('contract_type')->nullable();
            $table->binary('contract_image')->nullable();
            $table->date('real_end_hiredate')->nullable();
            $table->tinyInteger('job_type_id')->nullable();
            $table->char('work_modality',2)->nullable();
            $tabel->smallinteger('projected_number_time')->nullable(false);
            $table->char('projected_unity_time',2)->nullable();
            $table->date('date_cessation')->nullable();
            $table->string('reason_cessation',1000)->nullable();

            $table->decimal('salary_advance_allowed',5,2)->nullable();
            $table->decimal('salary',9,2)->nullable();
            $table->decimal('payrollsalary',9,2)->nullable();
            
            $table->varchar('marital_status',20)->nullable();
            $table->string('home_condition',250)->nullable();
            $table->tinyInteger('number_of_children')->nullable();
            $table->datetime('registerphoto_date')->nullable();
            $table->boolean('availability_travel')->nullable(false);
            $table->smallint('area_id')->nullable();
            $table->string('clothing_size',4)->nullable();
            
            $table->binary('newsletter')->nullable();
            $table->string('linkedln',80)->nullable();
            $table->binary('medical_status')->nullable();
            
            $table->varchar('driver_license_number',30)->nullable();
            $table->date('date_expedition_driver_license')->nullable();
            $table->date('sellbydate_driver_license')->nullable();
            $table->char('type_driver_license',1)->nullable();
            
            $table->binary('image_schedule')->nullable();
            $table->datime('date_update_schedule')->nullable();

            $table->string('cuspp',20)->nullable();
            $table->string('bank_account_number',150)->nullable();
            $table->char('payment_type',1)->nullable();
            $table->smallinteger('financial_entity_id')->nullable();
            
            $table->string('bank_account')->nullable();
            $table->boolean('student_children')->nullable();
            
            $table->timestamps();

            $table->foreign('identification_type_id')
                  ->reference('id')->on('identification_types')
                  ->onDelete('cascade');
            $table->foreign('via_id')
                  ->reference('id')->on('vias')
                  ->onDelete('cascade');
            $table->foreign('position_id')
                  ->reference('id')->on('positions')
                  ->onDelete('cascade');
            $table->foreign('phone_type1_id')
                  ->reference('id')->on('phone_types')
                  ->onDelete('cascade');
            $table->foreign('phone_type2_id')
                  ->reference('id')->on('phone_types')
                  ->onDelete('cascade');
            $table->foreign('phone_type3_id')
                  ->reference('id')->on('phone_types')
                  ->onDelete('cascade');
            $table->foreign('phone_operator1_id')
                  ->reference('id')->on('phone_operators')
                  ->onDelete('cascade');
            $table->foreign('phone_operator2_id')
                  ->reference('id')->on('phone_operators')
                  ->onDelete('cascade');
            $table->foreign('phone_operator3_id')
                  ->reference('id')->on('phone_operators')
                  ->onDelete('cascade');
            $table->foreign('role_id')
                  ->reference('id')->on('roles')
                  ->onDelete('cascade');
            $table->foreign('job_type_id')
                  ->reference('id')->on('job_types')
                  ->onDelete('cascade');
            $table->foreign('financial_entity_id')
                  ->reference('id')->on('financial_entities')
                  ->onDelete('cascade');
            $table->foreign('area_id')
                  ->reference('id')->on('areas')
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
