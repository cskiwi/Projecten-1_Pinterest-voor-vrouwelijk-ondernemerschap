<?php

class CommentsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('comments')->truncate();
        
		\DB::table('comments')->insert(array (
			0 => 
			array (
				'id' => 1,
				'user_id' => 1,
				'post_id' => 1,
				'content' => 'Let\'s go crazy',
				'created_at' => '2014-04-01 10:00:30',
				'updated_at' => '2014-04-01 10:00:30',
			),
			1 => 
			array (
				'id' => 2,
				'user_id' => 1,
				'post_id' => 3,
				'content' => 'Giggity',
				'created_at' => '2014-04-01 10:00:30',
				'updated_at' => '2014-04-01 10:00:30',
			),
		));
	}

}
