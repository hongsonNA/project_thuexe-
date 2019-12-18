<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilitysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilitys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('harmonic')->nullable();
            $table->integer('locate')->nullable();
            $table->integer('bluetooth')->nullable();
            $table->integer('usb')->nullable();
            $table->text('other_utility')->nullable();
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
        Schema::dropIfExists('utilitys');
    }
}
