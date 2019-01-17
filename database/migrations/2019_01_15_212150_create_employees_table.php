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
            /**Foreign key for phone types */
            $table->integer('phone_type1_id')->nullable()		REFERENCES Human_resources.Phone_types(id),
            $table->integer('phone_type2_id')->nullable()	REFERENCES Human_resources.Phone_types(id),
            $table->integer('phone_type3_id')->nullable()REFERENCES Human_resources.Phone_types(id),
            /**Foreign key for phone operators */
            $table->integer('phone_operator1_id')->nullable()
            $table->integer('phone_operator2_id')->nullable()
            $table->integer('phone_operator3_id')->nullable()
                
            $table->string('phone_notes01',30)->nullable();
            $table->string('phone_notes02',30)->nullable();
            $table->string('phone_notes03',30)->nullable();
            $table->binary('photo')->nulllable();
            $table->datetime('date_update_photo')->nullable();

            /**Llave foranea de cargo */
            $table->integer('role_id')->nullable(false);
            $table->date('admission_date')->nullable();
            $table->date('hire_date')->nullable();
            $table->date('planning_date')->nullable();
            $table->smallinteger('contract_term')->nullable();
            $table->char('contract_type',5)->nullable();
            $table->binary('contract_image')->nullable();
            $table->date('real_end_hiredate')->nullable();
            $table->char('type_job',5)->nullable();
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
            $table->smallint('work_area')->nullable();
            $table->string('clothing_size',4)->nullable();
            
            $table->binary('newsletter')->nullable();
            $table->string('linkedln',80)->nullable();
            $table->binary('medical_status')->nullable();
            
            $table->varchar('driver_license_number',30)->nullable();
            $table->date('date_expedition_driver_license')->nullable();
            $table->date('sellbydate_driver_license')->nullable();
            $table->char('type_driver_license',1)->nullable();
            
            $table->binary('image_schedule')->nullable();
            $table->datime('date_update_schedule'->nullable();

            $table->string('cuspp',20)->nullable();
            $table->tinyInteger('bank')->nullable();
            $table->string('bank_account_number',150)->nullable();
            $table->char('payment_type',1)->nullable();
            $table->smallinteger('bank_deposit')->nullable();
            $table->string('bank_account')
            $table->boolean('student_children')->nullable();
            
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
        Schema::dropIfExists('employees');
    }
}
