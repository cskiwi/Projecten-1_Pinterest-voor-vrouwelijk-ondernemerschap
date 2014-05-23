// CreateUsersTable
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('name', 32);
            $table->string('username', 32);
            $table->string('remember_token', 100)->nullable();
            $table->string('email', 320);
            $table->string('password', 64);
            $table->string('avatar', 64);

            // social media
            $table->string('facebook', 64);
            $table->string('twitter', 64);
            $table->string('instagram', 64);


            $table->boolean('receiveMails');
            $table->boolean('showFullName');

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
        Schema::drop('users');
    }

}