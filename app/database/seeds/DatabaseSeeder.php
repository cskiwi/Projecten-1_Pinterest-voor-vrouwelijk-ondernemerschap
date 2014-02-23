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

		$this->call('UserTableSeeder');
        $this->call('PostTableSeeder');
        $this->call('BoardTableSeeder');
        $this->call('Board_postTableSeeder');

		$this->call('CommentsTableSeeder');
		$this->call('FavoritesTableSeeder');

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }

}