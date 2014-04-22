<?php

class TagTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tag')->truncate();
        
		\DB::table('tag')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'Tag 1',
			),
			1 => 
			array (
				'id' => 2,
				'name' => 'Tag 2',
			),
			2 => 
			array (
				'id' => 3,
				'name' => 'Tag 3',
			),
			3 => 
			array (
				'id' => 4,
				'name' => 'Tag 4',
			),
		));
	}

}
