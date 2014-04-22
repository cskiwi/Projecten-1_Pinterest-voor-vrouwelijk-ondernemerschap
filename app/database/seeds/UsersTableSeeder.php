<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->truncate();
        
		\DB::table('users')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'Glenn Latomme',
				'username' => 'cskiwi',
				'email' => 'glenn.latomme@gmail.com',
				'password' => '$2y$10$laE.5jnD7tDhqBwag4H9bOz1fpTditkAmiqbEWnL82YALBiFMgRT.',
				'created_at' => '2014-04-01 10:00:28',
				'updated_at' => '2014-04-01 10:00:28',
			),
			1 => 
			array (
				'id' => 2,
				'name' => 'Jesse Struyvelt',
				'username' => 'jessestr',
				'email' => 'jstruyvelt@gmail.com',
				'password' => '$2y$10$d8MfQ4j/A4yRBwGhmOUXbejhiyAmsWMVjXo0Pp9fLIofM8J8qKY5u',
				'created_at' => '2014-04-01 10:00:28',
				'updated_at' => '2014-04-01 10:00:28',
			),
			2 => 
			array (
				'id' => 3,
				'name' => 'Nicolas VanHulle',
				'username' => 'nicolasvh',
				'email' => 'Nicolas.VanHulle@gmail.com',
				'password' => '$2y$10$I0AF3jpDop6q51RcelKJ4eyrbavmrAS93rRe2GWmVN6wL50FfBdWi',
				'created_at' => '2014-04-01 10:00:28',
				'updated_at' => '2014-04-01 10:00:28',
			),
			3 => 
			array (
				'id' => 4,
				'name' => 'Dummy User 1',
				'username' => 'dummy1',
				'email' => 'dummy@test.com',
				'password' => '$2y$10$BdNIIe2sLSfTkV7T8XHnfugbb6sgpyaWmTKUCKtl3pzu7LD1UQfJO',
				'created_at' => '2014-04-01 10:00:28',
				'updated_at' => '2014-04-01 10:00:28',
			),
			4 => 
			array (
				'id' => 5,
				'name' => 'Dummy User 2',
				'username' => 'dummy2',
				'email' => 'dummy@test.com',
				'password' => '$2y$10$64TmIaLUFsb1Y9yUFztiUek4YbM2f7AvLIHzgmg7RhHXldhgDV7K2',
				'created_at' => '2014-04-01 10:00:29',
				'updated_at' => '2014-04-01 10:00:29',
			),
			5 => 
			array (
				'id' => 6,
				'name' => 'Dummy User 3',
				'username' => 'dummy3',
				'email' => 'dummy@test.com',
				'password' => '$2y$10$fe3k/GOenos6GA0Z4TQHDOA0oqFSVGMKxFqYYpOrDCoMHWjZcrj86',
				'created_at' => '2014-04-01 10:00:29',
				'updated_at' => '2014-04-01 10:00:29',
			),
			6 => 
			array (
				'id' => 7,
				'name' => 'Dummy User 4',
				'username' => 'dummy4',
				'email' => 'dummy@test.com',
				'password' => '$2y$10$2eE8MB84z.sL7rl3445SnOUyW9UN.J8QIIaxBWJfWOaKH2Pzx5mMO',
				'created_at' => '2014-04-01 10:00:29',
				'updated_at' => '2014-04-01 10:00:29',
			),
			7 => 
			array (
				'id' => 8,
				'name' => '',
				'username' => 'dummy5',
				'email' => 'dummy@test.com',
				'password' => '$2y$10$IEdsZXVIsjL2eqpLh5D.suf/TZWnrK/rPLkMHUHmbPYgg6OAXkua2',
				'created_at' => '2014-04-01 10:00:29',
				'updated_at' => '2014-04-01 10:00:29',
			),
			8 => 
			array (
				'id' => 9,
				'name' => 'Dummy User 6',
				'username' => 'dummy6',
				'email' => 'dummy@test.com',
				'password' => '$2y$10$YEjriNOQIka1yPSMLsFs6uRmMRXZwGaldMxvfNOZlZemO6vmB18iC',
				'created_at' => '2014-04-01 10:00:29',
				'updated_at' => '2014-04-01 10:00:29',
			),
			9 => 
			array (
				'id' => 10,
				'name' => 'Dummy User 8',
				'username' => 'dummy7',
				'email' => 'dummy@test.com',
				'password' => '$2y$10$ASX5E0A3X33R9sQTeXWtsezA8rJJmp9mo8tPlX1hF3AgVniLAtA4q',
				'created_at' => '2014-04-01 10:00:29',
				'updated_at' => '2014-04-01 10:00:29',
			),
			10 => 
			array (
				'id' => 11,
				'name' => 'Dummy User 9',
				'username' => 'dummy9',
				'email' => 'dummy@test.com',
				'password' => '$2y$10$5EAf.AWHvHplNeNZK8VYtuzv4ik0dTMlOWYrl/GcTO24Q8AW5UKpG',
				'created_at' => '2014-04-01 10:00:29',
				'updated_at' => '2014-04-01 10:00:29',
			),
			11 => 
			array (
				'id' => 12,
				'name' => 'Dummy User 10',
				'username' => 'dummy10',
				'email' => 'dummy@test.com',
				'password' => '$2y$10$IJud41Sa8bImy0/IDZsKqemwJnTdqXg9/ndMk5ThpXQSfgKEMk/CW',
				'created_at' => '2014-04-01 10:00:29',
				'updated_at' => '2014-04-01 10:00:29',
			),
			12 => 
			array (
				'id' => 13,
				'name' => 'Dummy User 11',
				'username' => 'dummy11',
				'email' => 'dummy@test.com',
				'password' => '$2y$10$/g4GGbECcSTrq4l26Zf2Ye4L3R8qiTqqRZarVwclRBJOnlY5tkn76',
				'created_at' => '2014-04-01 10:00:29',
				'updated_at' => '2014-04-01 10:00:29',
			),
			13 => 
			array (
				'id' => 14,
				'name' => 'Dummy User 12',
				'username' => 'dummy12',
				'email' => 'dummy@test.com',
				'password' => '$2y$10$e.ZQUh3r5hn3rOGmHz9DZuCUfPbqG5igmYBbU05QziBxfD3fRbssS',
				'created_at' => '2014-04-01 10:00:29',
				'updated_at' => '2014-04-01 10:00:29',
			),
			14 => 
			array (
				'id' => 15,
				'name' => 'Dummy User 13',
				'username' => 'dummy13',
				'email' => 'dummy@test.com',
				'password' => '$2y$10$yxwrq0FoyB3DzOaUWN3.oe6qpeHZpzWH6oSYfiFKdwFJ.Sr9SRNUO',
				'created_at' => '2014-04-01 10:00:30',
				'updated_at' => '2014-04-01 10:00:30',
			),
			15 => 
			array (
				'id' => 16,
				'name' => 'Dummy User 14',
				'username' => 'dummy15',
				'email' => 'dummy@test.com',
				'password' => '$2y$10$kqFbJTp/R2bGRSfKYdUyX.NoyxyyUlXNnh/cWULeDhFZoeU1JFaAu',
				'created_at' => '2014-04-01 10:00:30',
				'updated_at' => '2014-04-01 10:00:30',
			),
			16 => 
			array (
				'id' => 17,
				'name' => 'Dummy User 16',
				'username' => 'dummy16',
				'email' => 'dummy@test.com',
				'password' => '$2y$10$J7IjYWBp7HoDblcRNtdV2uxe0MClY0kr8kf8LZOPHpLZe6BhC2BIS',
				'created_at' => '2014-04-01 10:00:30',
				'updated_at' => '2014-04-01 10:00:30',
			),
			17 => 
			array (
				'id' => 18,
				'name' => 'Dummy User 17',
				'username' => 'dummy17',
				'email' => 'dummy@test.com',
				'password' => '$2y$10$WJQNEK4gsOOU859l60Oik.4j0IBDxSF.nG4qWkhuklJBYfv2tfn6m',
				'created_at' => '2014-04-01 10:00:30',
				'updated_at' => '2014-04-01 10:00:30',
			),
			18 => 
			array (
				'id' => 19,
				'name' => 'Dummy User 18',
				'username' => 'dummy18',
				'email' => 'dummy@test.com',
				'password' => '$2y$10$AVAo2cPj7T/ZFrZyCf7akeNWVXXvnlpcv87dtGuvcW/iuQPuvscGu',
				'created_at' => '2014-04-01 10:00:30',
				'updated_at' => '2014-04-01 10:00:30',
			),
			19 => 
			array (
				'id' => 20,
				'name' => 'Dummy User 19',
				'username' => 'dummy19',
				'email' => 'dummy@test.com',
				'password' => '$2y$10$ecElkX7EeD/A7pLiuYZyZOLA/uGFfoP9bxhiNKIAjX.FjRJ3t88Ny',
				'created_at' => '2014-04-01 10:00:30',
				'updated_at' => '2014-04-01 10:00:30',
			),
			20 => 
			array (
				'id' => 22,
				'name' => '',
				'username' => 'sdf',
				'email' => 'a@a.a',
				'password' => '$2y$10$jWwJ4i0j6lLLQZ8nLXM.eenhGeNFJbEyOdpY4CsVmPd.bCslqaLYi',
				'created_at' => '2014-04-01 10:01:37',
				'updated_at' => '2014-04-01 10:01:37',
			),
		));
	}

}
