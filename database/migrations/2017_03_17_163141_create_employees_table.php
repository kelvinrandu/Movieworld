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
            $table->increments('id')->unsigned();
            $table->string('lastname', 60);
            $table->string('firstname', 60);
            $table->string('middlename', 60);
            $table->string('address', 120);
            $table->integer('city_id');
            $table->integer('state_id');
            $table->integer('country_id');
            //  $table->foreign('city_id')->references('id')->on('city')->unsigned();
          //  $table->foreign('city_id')->references('id')->on('city')->unsigned()->index();
          //  $table->foreign('state_id')->references('id')->on('state')->unsigned();

          //  $table->foreign('country_id')->references('id')->on('country')->unsigned();

            $table->char('zip', 10);
            $table->integer('age');
            $table->date('birthdate');
            $table->date('date_hired');
            $table->integer('department_id');
            $table->integer('division_id');
            $table->integer('company_id');
          //  $table->foreign('department_id')->references('id')->on('department')->unsigned();
          //  $table->foreign('division_id')->references('id')->on('division')->unsigned();
          //  $table->foreign('company_id')->references('id')->on('company')->unsigned();
            $table->string('picture', 60);
            $table->timestamps();
            $table->softDeletes();
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
