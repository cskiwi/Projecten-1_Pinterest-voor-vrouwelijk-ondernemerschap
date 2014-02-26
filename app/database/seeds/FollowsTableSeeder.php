<?php

class FollowsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('follows')->delete();

        $follows = [
            ['user_id'  => 1, 'board_id'   => 2],
            ['user_id'  => 2, 'board_id'   => 2],
            ['user_id'  => 1, 'board_id'   => 1],
            ['user_id'  => 2, 'board_id'   => 2],
            ['user_id'  => 3, 'board_id'   => 3],
            ['user_id'  => 5, 'board_id'   => 2],
            ['user_id'  => 1, 'board_id'   => 3],
            ['user_id'  => 1, 'board_id'   => 5],
            ['user_id'  => 1, 'board_id'   => 4],
            ['user_id'  => 1, 'board_id'   => 6],
            ['user_id'  => 1, 'board_id'   => 7],
        ];
        DB::table('follows')->insert($follows);

    }

}
