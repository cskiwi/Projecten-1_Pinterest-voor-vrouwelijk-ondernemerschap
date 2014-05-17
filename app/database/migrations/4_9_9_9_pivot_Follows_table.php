// PivotFollowsTable
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotFollowsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('follows', function(Blueprint $table) {
            $table->increments('id')->index();
            $table->unsignedinteger('user_id')->index();
            $table->unsignedinteger('board_id')->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('RESTRICT');
            $table->foreign('board_id')->references('id')->on('boards')->onDelete('RESTRICT');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('follows');
	}

}
