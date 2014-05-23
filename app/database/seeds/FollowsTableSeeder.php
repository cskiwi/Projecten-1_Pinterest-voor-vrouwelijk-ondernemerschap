<?php

class FollowsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('follows')->truncate();
        
		\DB::table('follows')->insert(array (
			0 => 
			array (
				'id' => 13,
				'user_id' => 1,
				'board_id' => 1,
			),
			1 => 
			array (
				'id' => 14,
				'user_id' => 1,
				'board_id' => 2,
			),
			2 => 
			array (
				'id' => 15,
				'user_id' => 1,
				'board_id' => 3,
			),
			3 => 
			array (
				'id' => 16,
				'user_id' => 1,
				'board_id' => 4,
			),
			4 => 
			array (
				'id' => 17,
				'user_id' => 1,
				'board_id' => 5,
			),
			5 => 
			array (
				'id' => 18,
				'user_id' => 2,
				'board_id' => 1,
			),
			6 => 
			array (
				'id' => 19,
				'user_id' => 2,
				'board_id' => 2,
			),
			7 => 
			array (
				'id' => 20,
				'user_id' => 2,
				'board_id' => 3,
			),
			8 => 
			array (
				'id' => 21,
				'user_id' => 2,
				'board_id' => 4,
			),
			9 => 
			array (
				'id' => 22,
				'user_id' => 2,
				'board_id' => 5,
			),
		));
	}

}
