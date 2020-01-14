<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('city_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('model_id')->nullable();
            $table->string('utility',255);
            $table->string('procedure',255);
            $table->integer('gear');
            $table->string('license_plate', 10);
            $table->string('name', 100);
            $table->integer('price');
            $table->integer('seat');
            $table->integer('capacity');
            $table->text('description');
            $table->text('address');
            $table->integer('view');
            $table->integer('is_trash')->default(0);
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('vehicles');
    }
}
