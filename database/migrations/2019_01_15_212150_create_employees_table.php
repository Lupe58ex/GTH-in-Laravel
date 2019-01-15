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
            $table->string('',)
            id_identification_type		INTEGER 		NOT NULL 	REFERENCES Human_resources.Identification_types(id),
            $table->char('gender',1)->nullable(false);
            $table->date('birthdate')->nullable(false);
            $table->string('district',100)->nullable(false);
            $table->string('province',100)->nullable(false);
            $table->string('department',100)->nullable(false);
            via							SERIAL 			NOT NULL	REFERENCES Human_resources.vias(id),
            $table->string('address',500)->nullable(false);
            $table->string('address_reference',500)->nullable(false);
            $table->string('email_main',100)->nullable(false);
            $table->string('email_alternative',100)->nullable(false);
            $table->boolean('active')->nullable(false),
            
            id_position					INTEGER			NOT NULL	REFERENCES Human_resources.positions(id),
            $table->string('phone_number01',30)->nullable;
            $table->string('phone_number02',30)->nullable;
            $table->string('phone_number03',30)->nullable;
            phone_type01				INTEGER 		NULL		REFERENCES Human_resources.Phone_types(id),
            phone_type02				INTEGER 		NULL		REFERENCES Human_resources.Phone_types(id),
            phone_type03				INTEGER 		NULL		REFERENCES Human_resources.Phone_types(id),
            phone_operator01			INTEGER 		NULL		REFERENCES Human_resources.Phone_operators(id),
            phone_operator02			INTEGER 		NULL		REFERENCES Human_resources.Phone_operators(id),
            phone_operator03			INTEGER 		NULL		REFERENCES Human_resources.Phone_operators(id),
            $table->string('phone_notes01',30)->nullable();
            $table->string('phone_notes02',30)->nullable();
            $table->string('phone_notes03',30)->nullable();
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
