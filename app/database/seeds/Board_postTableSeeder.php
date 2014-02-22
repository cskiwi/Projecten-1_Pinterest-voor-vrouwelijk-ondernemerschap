<?php

class Board_postTableSeeder extends Seeder {

	public function run()
	{
        DB::table('board_post')->delete();

		$board_post = [
            ['board_id'  => 1, 'post_id'   => 2],
            ['board_id'  => 2, 'post_id'   => 2],
            ['board_id'  => 1, 'post_id'   => 1],
            ['board_id'  => 2, 'post_id'   => 2],
            ['board_id'  => 3, 'post_id'   => 3],
            ['board_id'  => 5, 'post_id'   => 2],
        ];

		// Uncomment the below to run the seeder
		DB::table('board_post')->insert($board_post);
	}

}
