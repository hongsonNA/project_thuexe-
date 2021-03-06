<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTargetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('targets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('vehicle_id');
            $table->integer('user_id');
            $table->text('description')->nullable();
            $table->integer('status')->default(1);
            $table->integer('is_delete')->default(0);
            $table->string('vehicle_registration_certificate')->default(1);
            $table->text('other_targets')->nullable();
            $table->date('start_date')->date('d-m-Y');
            $table->date('end_date')->date('d-m-Y');


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
        Schema::dropIfExists('targets');
    }
}
