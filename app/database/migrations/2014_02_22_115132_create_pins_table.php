<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePinsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pins', function(Blueprint $table)
		{
			$table->increments('id');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;

            $table->string('title');
            $table->text('description');

            $table->string('imgLocation');
            $table->double('price');

            $table->enum('type', array('Image', 'Text', 'Video', 'Tutorial', 'Offer'));
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.s
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pins');
	}

}