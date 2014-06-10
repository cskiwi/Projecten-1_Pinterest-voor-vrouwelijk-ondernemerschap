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
				'user_id' => 10,
				'pin_id' => 1,
				'content' => 'Looks delicious, gonna use this recipe this afternoon! Thanks!',
				'created_at' => '2014-04-01 10:00:30',
				'updated_at' => '2014-04-01 10:00:30',
			),
			1 => 
			array (
				'id' => 2,
				'user_id' => 11,
				'pin_id' => 2,
				'content' => 'God I love this poster!',
				'created_at' => '2014-04-01 10:00:30',
				'updated_at' => '2014-04-01 10:00:30',
			),

            2 =>
                array (
                    'id' => 3,
                    'user_id' => 3,
                    'pin_id' => 4,
                    'content' => 'That\'s a nice picture',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            3 =>
                array (
                    'id' => 4,
                    'user_id' => 3,
                    'pin_id' => 8,
                    'content' => 'Beautiful photo. Where was this photo taken?',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            4 =>
                array (
                    'id' => 5,
                    'user_id' => 14,
                    'pin_id' => 8,
                    'content' => 'Hi, thanks for the great reply. This photo was taken in Brussels',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            5 =>
                array (
                    'id' => 6,
                    'user_id' => 3,
                    'pin_id' => 8,
                    'content' => 'Thank you!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            6 =>
                array (
                    'id' => 7,
                    'user_id' => 9,
                    'pin_id' => 3,
                    'content' => 'I like it a lot!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
		));
	}

}
