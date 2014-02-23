<?php

class CommentsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('comments')->delete();
        Comment::create(array(
            'id'        => 1,
            'user_id'   => 1,
            'post_id'   => 1,
            'content'      => 'Let\'s go crazy'
        ));
        Comment::create(array(
            'id'        => 2,
            'user_id'   => 1,
            'post_id'   => 3,
            'content'      => 'Giggity'
        ));
	}

}
