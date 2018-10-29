<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('category');
            $table->string('quantity')->default('1');
            $table->string('swl')->default('1 Tonnes');
            $table->string('size')->default('1 Inch');
            $table->string('inspected')->nullable();
            $table->string('validity')->nullable();
            $table->string('tag_no')->default('A***');
            $table->string('current_locaton')->default('Fab Yard');
            $table->string('status')->nullable();
            $table->string('responsible_person')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('equipments');
    }
}
