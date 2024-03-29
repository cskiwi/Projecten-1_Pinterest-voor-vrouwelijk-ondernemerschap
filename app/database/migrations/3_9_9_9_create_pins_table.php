// CreatePinsTable
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
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->unsignedInteger('board_id')->nullable();
            $table->foreign('board_id')->references('id')->on('boards')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->unsignedInteger('original_id')->nullable();
            $table->foreign('original_id')->references('id')->on('pins')->onDelete('CASCADE')->onUpdate('CASCADE');


            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('imgLocation')->nullable();
            $table->double('price')->nullable();
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
