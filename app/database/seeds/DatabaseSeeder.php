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

        $this->call('PostsTableSeeder');
        $this->call('BoardsTableSeeder');
        $this->call('UsersTableSeeder');

        $this->call('FavoritesTableSeeder');
        // $this->call('FollowsTableSeeder');
        $this->call('CommentsTableSeeder');
        $this->call('TagTableSeeder');

        $this->call('Board_tagTableSeeder');
        $this->call('Board_postTableSeeder');




        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

}