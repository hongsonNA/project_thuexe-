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
            $table->string('name', 100);
            $table->integer('seat');
            $table->text('description');
            $table->integer('cate_id');
            $table->integer('price');
            $table->text('model_id');
            $table->integer('view');
            $table->text('address');
            $table->integer('city_id');
            $table->integer('user_id');
            $table->integer('district_id');
            $table->string('image');
            $table->integer('status');
            $table->string('slug')->nullable();
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
