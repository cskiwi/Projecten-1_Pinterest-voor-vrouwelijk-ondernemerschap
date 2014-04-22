<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

    	$this->call('UsersTableSeeder');
		$this->call('BoardsTableSeeder');
		$this->call('BoardPostTableSeeder');
		$this->call('BoardTagTableSeeder');
		$this->call('CommentsTableSeeder');
		$this->call('FavoritesTableSeeder');
		$this->call('FollowsTableSeeder');
		$this->call('MigrationsTableSeeder');
		$this->call('PasswordRemindersTableSeeder');
		$this->call('PostsTableSeeder');
		$this->call('TagTableSeeder');
	}

}