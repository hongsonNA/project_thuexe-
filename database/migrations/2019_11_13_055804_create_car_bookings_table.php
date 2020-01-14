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
				$table->integer('user_id')->nullable();
				$table->integer('vehicle_id')->nullable();
				$table->string('name')->nullable();
				$table->string('email')->nullable();
				$table->integer('phone')->nullable();
				$table->integer('total')->nullable();
				$table->integer('is_delete')->nullable();
				$table->timestamp('email_verified_at')->nullable();
				$table->text('start_date')->nullable();
				$table->text('end_date')->nullable();
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
