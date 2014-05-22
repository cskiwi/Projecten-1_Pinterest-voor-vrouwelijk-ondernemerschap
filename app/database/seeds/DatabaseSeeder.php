<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    	$this->call('UsersTableSeeder');
		$this->call('BoardsTableSeeder');
        $this->call('CommentsTableSeeder');
        $this->call('KeywordsTableSeeder');
		$this->call('FavoritesTableSeeder');
		$this->call('FollowsTableSeeder');
		$this->call('PasswordRemindersTableSeeder');
		$this->call('PinTableSeeder');
		$this->call('TagTableSeeder');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }

}