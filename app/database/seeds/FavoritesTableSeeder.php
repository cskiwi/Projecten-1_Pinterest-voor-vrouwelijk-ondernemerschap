<?php

class FavoritesTableSeeder extends Seeder {

	public function run()
	{
        DB::table('favorites')->delete();
	}

}
