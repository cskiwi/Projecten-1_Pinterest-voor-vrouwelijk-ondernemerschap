<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotBoardPinTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('board_pin', function(Blueprint $table) {
			$table->increments('id');
            $table->unsignedinteger('board_id')->index();
			$table->unsignedinteger('pin_id')->index();
            $table->foreign('board_id')->references('id')->on('boards')->onDelete('cascade');
			$table->foreign('pin_id')->references('id')->on('pins')->onDelete('cascade');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('board_pin');
	}

}
