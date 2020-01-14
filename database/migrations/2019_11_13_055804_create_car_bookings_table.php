<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarBookingsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('car_bookings', function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->integer('user_id');
				$table->integer('vehicle_id');
				$table->string('name');
				$table->string('email');
				$table->integer('phone');
				$table->integer('total');
				$table->integer('is_delete')->nullable();
				$table->timestamp('email_verified_at')->nullable();
				$table->text('start_date');
				$table->text('end_date');
				$table->integer('status')->default(1);
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('car_bookings');
	}
}
