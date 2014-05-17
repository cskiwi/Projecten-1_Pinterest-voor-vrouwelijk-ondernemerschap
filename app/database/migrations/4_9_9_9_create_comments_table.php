// CreateCommentsTable
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
            $table->increments('id')->index();
            $table->unsignedinteger('user_id')->index();
            $table->unsignedinteger('pin_id')->index();
            $table->text('content');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('RESTRICT');
            $table->foreign('pin_id')->references('id')->on('pins')->onDelete('RESTRICT');

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
		Schema::drop('comments');
	}

}
