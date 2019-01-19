<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_types', function (Blueprint $table) {
            $table->tinyincrements('id');
            $table->string('name',150)->nullable(false);
            $table->string('short_name',15)->nullable(false);
            $table->smallInteger('suggested_duration')->nullable(false);
            $table->string('description',2500)->nullable();
            $table->boolean('appears')-nullable(false);
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
        Schema::dropIfExists('contract_types');
    }
}
