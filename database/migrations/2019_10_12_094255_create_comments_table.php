<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('comments', function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->integer('user_id');
				$table->integer('post_id')->nullable();
				$table->integer('vehicle_id')->nullable();
				$table->timestamp('comment_date');
				$table->text('content');
				$table->text('status');
				$table->text('is_delete')->nullable();
				$table->text('url')->nullable();
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('comments');
	}
}
