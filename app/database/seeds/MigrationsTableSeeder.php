<?php

class MigrationsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('migrations')->truncate();
        
		\DB::table('migrations')->insert(array (
			0 => 
			array (
				'migration' => '2014_02_21_161754_create_users_table',
				'batch' => 1,
			),
			1 => 
			array (
				'migration' => '2014_02_21_181503_create_password_reminders_table',
				'batch' => 1,
			),
			2 => 
			array (
				'migration' => '2014_02_22_115132_create_posts_table',
				'batch' => 1,
			),
			3 => 
			array (
				'migration' => '2014_02_22_165246_create_boards_table',
				'batch' => 1,
			),
			4 => 
			array (
				'migration' => '2014_02_22_170910_pivot_board_post_table',
				'batch' => 1,
			),
			5 => 
			array (
				'migration' => '2014_02_23_141055_create_comments_table',
				'batch' => 1,
			),
			6 => 
			array (
				'migration' => '2014_02_23_142239_create_favorites_table',
				'batch' => 1,
			),
			7 => 
			array (
				'migration' => '2014_02_25_124556_pivot_Follows_table',
				'batch' => 1,
			),
			8 => 
			array (
				'migration' => '2014_02_26_163508_create_tag_table',
				'batch' => 1,
			),
			9 => 
			array (
				'migration' => '2014_02_26_170052_pivot_board_tag_table',
				'batch' => 1,
			),
		));
	}

}
