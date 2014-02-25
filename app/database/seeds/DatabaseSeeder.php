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

        $this->call('Board_postTableSeeder');
        $this->call('FavoritesTableSeeder');
        $this->call('FollowsTableSeeder');
        $this->call('CommentsTableSeeder');

        $this->call('PostsTableSeeder');
        $this->call('BoardsTableSeeder');
        $this->call('UsersTableSeeder');

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

	}

}