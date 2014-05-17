// CreateFavoritesTable
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFavoritesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function(Blueprint $table) {
            $table->increments('id')->index();
            $table->unsignedinteger('user_id')->index();
            $table->unsignedinteger('pin_id')->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('RESTRICT');
            $table->foreign('pin_id')->references('id')->on('pins')->onDelete('RESTRICT');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('favorites');
    }

}
