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
            $table->integer('user_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('model_id')->nullable();
            $table->string('utility',255)->nullable();
            $table->string('procedure',255)->nullable();
            $table->integer('gear')->nullable();
            $table->string('license_plate', 10)->nullable();
            $table->string('name', 100)->nullable();
            $table->integer('price')->nullable();
            $table->integer('seat')->nullable();
            $table->integer('capacity')->nullable();
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->integer('view')->nullable();
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
