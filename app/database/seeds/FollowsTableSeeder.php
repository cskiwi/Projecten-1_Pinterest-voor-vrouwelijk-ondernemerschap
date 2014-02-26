<?php

class FollowsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('follows')->delete();
    }

}
