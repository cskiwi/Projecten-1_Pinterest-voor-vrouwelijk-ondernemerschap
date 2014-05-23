<?php

class KeywordsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('keywords')->truncate();
        
		\DB::table('keywords')->insert(array (
			0 => 
			array (
				'id' => 1,
				'pin_id' => 1,
                'occurrences' => 2,
				'keywords' => 'Let\'s go crazy',
			),
			1 => 
			array (
				'id' => 2,
				'pin_id' => 3,
                'occurrences' => 2,
                'keywords' => 'Testing keywords',
			),
		));
	}

}
