<?php

class FollowsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('follows')->delete();

        $follows = [
            ['board_id'  => 1, 'post_id'   => 2],
            ['board_id'  => 2, 'post_id'   => 2],
            ['board_id'  => 1, 'post_id'   => 1],
            ['board_id'  => 2, 'post_id'   => 2],
            ['board_id'  => 3, 'post_id'   => 3],
            ['board_id'  => 5, 'post_id'   => 2],
            ['board_id'  => 1, 'post_id'   => 3],
            ['board_id'  => 1, 'post_id'   => 5],
            ['board_id'  => 1, 'post_id'   => 4],
            ['board_id'  => 1, 'post_id'   => 6],
            ['board_id'  => 1, 'post_id'   => 7],
        ];
        DB::table('follows')->insert($follows);

    }

}
