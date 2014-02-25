<?php

class FollowsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('follows')->delete();

        Follow::create(array(
            'id'        => 1,
            'user_id'   => 1,
            'board_id'   => 1,
        ));
        Follow::create(array(
            'id'        => 2,
            'user_id'   => 2,
            'board_id'   => 1,
        ));
        Follow::create(array(
            'id'        => 3,
            'user_id'   => 3,
            'board_id'   => 1,
        ));
        Follow::create(array(
            'id'        => 4,
            'user_id'   => 2,
            'board_id'   => 2,
        ));
	}

}
