<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('company');
            $table->string('designation');
            $table->string('category');
            $table->string('employment_status');
            $table->string('t_bosiet')->nullable();
            $table->string('t_bosiet_validity_date');
            $table->string('osp')->nullable();
            $table->string('osp_validity_date');
            $table->string('accomodation')->nullable();
            $table->string('general_medicals')->nullable();
            $table->string('general_medicals_validity_date');
            $table->string('tuberculosis')->nullable();
            $table->string('tuberculosis_validity_date');
            $table->string('cv')->nullable();
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
        Schema::dropIfExists('personnels');
    }
}
