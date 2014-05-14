<?php

class BoardPinTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('board_pin')->truncate();
        
		\DB::table('board_pin')->insert(array (
			0 => 
			array (
				'id' => 18,
				'board_id' => 1,
				'pin_id' => 2,
			),
			1 => 
			array (
				'id' => 19,
				'board_id' => 1,
				'pin_id' => 3,
			),
			2 => 
			array (
				'id' => 20,
				'board_id' => 1,
				'pin_id' => 4,
			),
			3 => 
			array (
				'id' => 21,
				'board_id' => 1,
				'pin_id' => 5,
			),
			4 => 
			array (
				'id' => 22,
				'board_id' => 1,
				'pin_id' => 7,
			),
			5 => 
			array (
				'id' => 23,
				'board_id' => 2,
				'pin_id' => 1,
			),
			6 => 
			array (
				'id' => 24,
				'board_id' => 2,
				'pin_id' => 2,
			),
			7 => 
			array (
				'id' => 25,
				'board_id' => 2,
				'pin_id' => 5,
			),
			8 => 
			array (
				'id' => 26,
				'board_id' => 2,
				'pin_id' => 6,
			),
			9 => 
			array (
				'id' => 27,
				'board_id' => 3,
				'pin_id' => 8,
			),
			10 => 
			array (
				'id' => 28,
				'board_id' => 3,
				'pin_id' => 9,
			),
			11 => 
			array (
				'id' => 29,
				'board_id' => 4,
				'pin_id' => 11,
			),
			12 => 
			array (
				'id' => 30,
				'board_id' => 4,
				'pin_id' => 12,
			),
			13 => 
			array (
				'id' => 31,
				'board_id' => 5,
				'pin_id' => 7,
			),
			14 => 
			array (
				'id' => 32,
				'board_id' => 5,
				'pin_id' => 10,
			),
		));
	}

}