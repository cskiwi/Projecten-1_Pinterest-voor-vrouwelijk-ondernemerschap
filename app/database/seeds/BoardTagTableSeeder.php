<?php

class BoardTagTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('board_tag')->truncate();
        
		\DB::table('board_tag')->insert(array (
			0 => 
			array (
				'id' => 12,
				'board_id' => 1,
				'tag_id' => 2,
			),
			1 => 
			array (
				'id' => 13,
				'board_id' => 2,
				'tag_id' => 2,
			),
			2 => 
			array (
				'id' => 14,
				'board_id' => 1,
				'tag_id' => 1,
			),
			3 => 
			array (
				'id' => 15,
				'board_id' => 2,
				'tag_id' => 2,
			),
			4 => 
			array (
				'id' => 16,
				'board_id' => 3,
				'tag_id' => 3,
			),
			5 => 
			array (
				'id' => 17,
				'board_id' => 5,
				'tag_id' => 2,
			),
			6 => 
			array (
				'id' => 18,
				'board_id' => 1,
				'tag_id' => 3,
			),
			7 => 
			array (
				'id' => 19,
				'board_id' => 1,
				'tag_id' => 5,
			),
			8 => 
			array (
				'id' => 20,
				'board_id' => 1,
				'tag_id' => 4,
			),
			9 => 
			array (
				'id' => 21,
				'board_id' => 1,
				'tag_id' => 6,
			),
			10 => 
			array (
				'id' => 22,
				'board_id' => 1,
				'tag_id' => 7,
			),
		));
	}

}
