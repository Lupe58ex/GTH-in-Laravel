<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('professional_experiences', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->unsignedSmallInteger('area_id')->nullable(false);
            $table->smallInteger('role_id')->nullable(false);
            $table->smallInteger('company_id')->nullable();
            $table->tinyInteger('start_month')->nullable(false);
            $table->smallInteger('start_year')->nullable(false);
            $table->tinyInteger('end_month')->nullable(false);
            $table->smallInteger('end_year')->nullable(false);
            $table->tinyInteger('contract_type_id')->nullable(false);
            $table->string('function',4000)->nullable();
            $table->integer('user_id')->nullable(false);
            $table->string('observation',4000)->nullable();
            $table->integer('employee_id')->nullable(false);
            $table->string('exit_reason',5000)->nullable();
            $table->timestamps();

            $table->foreign('employee_id')
                ->references('id')->on('employees')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('role_id')
                ->references('id')->on('roles')
                ->onDelete('cascade');
            $table->foreign('company_id')
                ->references('id')->on('companies')
                ->onDelete('cascade');
            $table->foreign('area_id')
                ->references('id')->on('areas')
                ->onDelete('cascade');
            $table->foreign('contract_type_id')
                ->references('id')->on('contract_types')
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
        Schema::dropIfExists('professional_experiences');
    }
}
