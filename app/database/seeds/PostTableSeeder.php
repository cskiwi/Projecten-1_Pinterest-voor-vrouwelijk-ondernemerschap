<?php

class PostTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('posts')->delete();
        Post::create(array(
            'id'        => 1,
            'user_id'   => 1,
            'title'     => 'How to be not boring',
            'body'      => 'Do awesome stuff'
        ));
        Post::create(array(
            'id'        => 2,
            'user_id'   => 1,
            'title'     => 'How to be awesome',
            'body'      => 'Do awesome stuff'
        ));
        Post::create(array(
            'id'        => 3,
            'user_id'   => 2,
            'title'     => 'How to be Glenn',
            'body'      => 'Do awesome stuff'
        ));
        Post::create(array(
            'id'        => 4,
            'user_id'   => 5,
            'title'     => 'asdasds',
            'body'      => 'Do awesome stuff'
        ));
        Post::create(array(
            'id'        => 5,
            'user_id'   => 8,
            'title'     => 'Hasdasdg',
            'body'      => 'Do awesome stuff'
        ));
    }

}