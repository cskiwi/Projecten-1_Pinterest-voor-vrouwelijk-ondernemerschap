<?php

class Board_tagTableSeeder extends Seeder {

	public function run()
	{
        DB::table('board_tag')->delete();

        $board_tag = [
            ['board_id'  => 1, 'tag_id'   => 2],
            ['board_id'  => 2, 'tag_id'   => 2],
            ['board_id'  => 1, 'tag_id'   => 1],
            ['board_id'  => 2, 'tag_id'   => 2],
            ['board_id'  => 3, 'tag_id'   => 3],
            ['board_id'  => 5, 'tag_id'   => 2],
            ['board_id'  => 1, 'tag_id'   => 3],
            ['board_id'  => 1, 'tag_id'   => 5],
            ['board_id'  => 1, 'tag_id'   => 4],
            ['board_id'  => 1, 'tag_id'   => 6],
            ['board_id'  => 1, 'tag_id'   => 7],
        ];

		DB::table('board_tag')->insert($board_tag);
	}

}
