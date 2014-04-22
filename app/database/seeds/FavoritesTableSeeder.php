<?php

class FavoritesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('favorites')->truncate();
        
		\DB::table('favorites')->insert(array (
			0 => 
			array (
				'id' => 1,
				'user_id' => 1,
				'post_id' => 5,
			),
			1 => 
			array (
				'id' => 2,
				'user_id' => 1,
				'post_id' => 7,
			),
			2 => 
			array (
				'id' => 3,
				'user_id' => 1,
				'post_id' => 8,
			),
			3 => 
			array (
				'id' => 4,
				'user_id' => 2,
				'post_id' => 11,
			),
			4 => 
			array (
				'id' => 5,
				'user_id' => 2,
				'post_id' => 10,
			),
		));
	}

}
