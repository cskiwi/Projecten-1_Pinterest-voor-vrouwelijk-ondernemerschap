<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotBoardTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Schema::create('board_tag', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('board_id')->unsigned()->index();
			$table->integer('tag_id')->unsigned()->index();
			$table->foreign('board_id')->references('id')->on('boards')->onDelete('cascade');
			$table->foreign('tag_id')->references('id')->on('tag')->onDelete('cascade');
		});

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('board_tag');
	}

}
