<?php

class FavoritesTableSeeder extends Seeder {

	public function run()
	{
        DB::table('favorites')->delete();
        Favorite::create(array(
            'id'        => 1,
            'user_id'   => 1,
            'post_id'   => 1,
        ));
        Favorite::create(array(
            'id'        => 2,
            'user_id'   => 2,
            'post_id'   => 1,
        ));
        Favorite::create(array(
            'id'        => 3,
            'user_id'   => 3,
            'post_id'   => 1,
        ));
        Favorite::create(array(
            'id'        => 4,
            'user_id'   => 2,
            'post_id'   => 2,
        ));
	}

}
