<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotBoardPostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('board_post', function(Blueprint $table) {
			$table->increments('id');
            $table->unsignedinteger('board_id')->index();
			$table->unsignedinteger('post_id')->index();
            $table->foreign('board_id')->references('id')->on('boards')->onDelete('cascade');
			$table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('board_post');
	}

}
