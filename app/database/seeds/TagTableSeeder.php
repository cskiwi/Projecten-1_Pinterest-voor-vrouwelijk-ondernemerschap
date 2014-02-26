<?php

class TagTableSeeder extends Seeder {

	public function run()
	{
		DB::table('tag')->delete();

        Tag::create(array(
            'id'        => 1,
            'name'   => 'Tag 1',
        ));
        Tag::create(array(
            'id'        => 2,
            'name'   => 'Tag 2',
        ));
        Tag::create(array(
            'id'        => 3,
            'name'   => 'Tag 3',
        ));
        Tag::create(array(
            'id'        => 4,
            'name'   => 'Tag 4',
        ));
	}

}
