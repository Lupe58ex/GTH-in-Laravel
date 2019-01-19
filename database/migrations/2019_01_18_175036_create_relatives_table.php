<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatives', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('name',30)->nullable(false);
            $table->string('lastname_mother',30)->nullable(false);
            $table->string('lastname_father',30)->nullable(false);
            $table->char('gender',1)->nullable(false);
            $table->date('birthdate')->nullable();
            $table->string('cellphone',30)->nullable();
            $table->string('house_via',20)->nullable();
            $table->string('house_address',500)->nullable();
            $table->string('job_via',20)->nullable();
            $table->string('job_address',500)->nullable();
            $table->string('place_job',500)->nullable();
            $table->char('DNI',8)->nullable();
            $table->boolean('full_age')->nullable();
            $table->binary('address_image')->nullable();
            $table->boolean('student')->nullable();
            $table->string('reference',500)->nullable();
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
        Schema::dropIfExists('relatives');
    }
}
