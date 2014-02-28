<?php

class FollowsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('follows')->delete();

        $follows = [
            // ik follow alles :)
            ['board_id'  => 1, 'user_id'   => 1],
            ['board_id'  => 2, 'user_id'   => 1],
            ['board_id'  => 3, 'user_id'   => 1],
            ['board_id'  => 4, 'user_id'   => 1],
            ['board_id'  => 5, 'user_id'   => 1],

            // Jesse ook
            ['board_id'  => 1, 'user_id'   => 2],
            ['board_id'  => 2, 'user_id'   => 2],
            ['board_id'  => 3, 'user_id'   => 2],
            ['board_id'  => 4, 'user_id'   => 2],
            ['board_id'  => 5, 'user_id'   => 2],
        ];

        // Uncomment the below to run the seeder
        DB::table('follows')->insert($follows);
    }

}
