// CreateTagTable
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKeywordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('keywords', function(Blueprint $table) {
			$table->increments('id');
            $table->unsignedinteger('pin_id')->index();
            $table->integer('occurrences');
            $table->string('keywords');
            $table->foreign('pin_id')->references('id')->on('pins')->onDelete('CASCADE')->onUpdate('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('keywords');
	}

}
