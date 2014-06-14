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
                    'user_id' => 18,
                    'pin_id' => 4,
                    'content' => 'This poster is beautiful!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            3 =>
                array (
                    'id' => 4,
                    'user_id' => 15,
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
                    'user_id' => 15,
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
            7 =>
                array (
                    'id' => 8,
                    'user_id' => 10,
                    'pin_id' => 20,
                    'content' => 'Hi, the word string has to be with a small s!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            8 =>
                array (
                    'id' => 9,
                    'user_id' => 8,
                    'pin_id' => 20,
                    'content' => 'Thanks a lot! It works now!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            9 =>
                array (
                    'id' => 10,
                    'user_id' => 16,
                    'pin_id' => 23,
                    'content' => 'Looks very interesting, thanks for sharing!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            10 =>
                array (
                    'id' => 11,
                    'user_id' => 17,
                    'pin_id' => 23,
                    'content' => 'Thank you for sharing!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            11 =>
                array (
                    'id' => 12,
                    'user_id' => 20,
                    'pin_id' => 15,
                    'content' => 'These look delicious, is it possible to share the recipe?',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            12 =>
                array (
                    'id' => 13,
                    'user_id' => 4,
                    'pin_id' => 15,
                    'content' => 'Yes off course I can give you the recipe, you can find it on this site: www.chocolatecookiesrecipe.com! ',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            13 =>
                array (
                    'id' => 14,
                    'user_id' => 19,
                    'pin_id' => 52,
                    'content' => 'Very nice informative infographic!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            14 =>
                array (
                    'id' => 15,
                    'user_id' => 18,
                    'pin_id' => 51,
                    'content' => 'I like it a lot!!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            15 =>
                array (
                    'id' => 16,
                    'user_id' => 17,
                    'pin_id' => 50,
                    'content' => 'Thank you for the tips!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            16 =>
                array (
                    'id' => 17,
                    'user_id' => 16,
                    'pin_id' => 49,
                    'content' => 'My god this is beautiful!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            17 =>
                array (
                    'id' => 18,
                    'user_id' => 15,
                    'pin_id' => 49,
                    'content' => 'Such a nice picture!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            18 =>
                array (
                    'id' => 19,
                    'user_id' => 14,
                    'pin_id' => 48,
                    'content' => 'I would love to buy this!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            19 =>
                array (
                    'id' => 20,
                    'user_id' => 20,
                    'pin_id' => 48,
                    'content' => 'Thanks for buying it, I hope you like it!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            20 =>
                array (
                    'id' => 21,
                    'user_id' => 14,
                    'pin_id' => 48,
                    'content' => 'The cardholders arrived yesterday. They look really nice!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            21 =>
                array (
                    'id' => 22,
                    'user_id' => 13,
                    'pin_id' => 47,
                    'content' => 'Beautiful!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            22 =>
                array (
                    'id' => 23,
                    'user_id' => 12,
                    'pin_id' => 46,
                    'content' => 'I know my way around the computer, maybe I could teach you a thing or two! I am from London! ',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            23 =>
                array (
                    'id' => 24,
                    'user_id' => 9,
                    'pin_id' => 46,
                    'content' => 'What a coincidence I am from London too! Thank you!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            24 =>
                array (
                    'id' => 25,
                    'user_id' => 11,
                    'pin_id' => 45,
                    'content' => 'Really nice tutorial, always wanted to make one of these. Now I know how!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            25 =>
                array (
                    'id' => 26,
                    'user_id' => 9,
                    'pin_id' => 45,
                    'content' => 'Thanks!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            26 =>
                array (
                    'id' => 27,
                    'user_id' => 10,
                    'pin_id' => 44,
                    'content' => 'Interesting article!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            27 =>
                array (
                    'id' => 28,
                    'user_id' => 14,
                    'pin_id' => 43,
                    'content' => 'Nice, did you make this yourself?',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            28 =>
                array (
                    'id' => 29,
                    'user_id' => 5,
                    'pin_id' => 43,
                    'content' => 'No, found it on the Internet. Since I really liked it I shared it!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            29 =>
                array (
                    'id' => 30,
                    'user_id' => 9,
                    'pin_id' => 42,
                    'content' => 'Never looked at the Social media like this.Interesting infographic!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            30 =>
                array (
                    'id' => 31,
                    'user_id' => 6,
                    'pin_id' => 41,
                    'content' => 'Thanks for sharing this!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            31 =>
                array (
                    'id' => 32,
                    'user_id' => 7,
                    'pin_id' => 41,
                    'content' => 'Thank you!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            32 =>
                array (
                    'id' => 33,
                    'user_id' => 9,
                    'pin_id' => 40,
                    'content' => 'Never realised how much effect colors have on our purchasing habbits, until now!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            33 =>
                array (
                    'id' => 34,
                    'user_id' => 4,
                    'pin_id' => 39,
                    'content' => 'These look delicious, ordering 1 kilo right now!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            34 =>
                array (
                    'id' => 35,
                    'user_id' => 20,
                    'pin_id' => 39,
                    'content' => 'Thank you! I hope you like them!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            35 =>
                array (
                    'id' => 36,
                    'user_id' => 5,
                    'pin_id' => 38,
                    'content' => 'The most beautiful poster i have seen so far on the site!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            36 =>
                array (
                    'id' => 37,
                    'user_id' => 8,
                    'pin_id' => 38,
                    'content' => 'Stunning poster!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),
            37 =>
                array (
                    'id' => 38,
                    'user_id' => 19,
                    'pin_id' => 38,
                    'content' => 'Thank you, for all your lovely comments!',
                    'created_at' => '2014-04-01 10:00:30',
                    'updated_at' => '2014-04-01 10:00:30',
                ),

		));
	}

}
