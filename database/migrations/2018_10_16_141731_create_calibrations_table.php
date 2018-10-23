<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalibrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calibrations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('equipment_id');
            $table->string('calibration_frequency')->nullable();
            $table->string('last_calibrated')->nullable();
            $table->string('calibration_due_date')->nullable();
            $table->string('calibration_type')->nullable();
            $table->string('calibration_by')->nullable();
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
        Schema::dropIfExists('calibrations');
    }
}
