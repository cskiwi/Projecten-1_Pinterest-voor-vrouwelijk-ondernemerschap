// app/database/seeds/PostTableSeeder.php

<?php

class PostTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('posts')->delete();
        Post::create(array(
            'user_id' => 1,
            'title' => 'How to be not boring',
            'body'    => 'Do awesome stuff'
        ));
        Post::create(array(
            'user_id' => 1,
            'title' => 'How to be awesome',
            'body'    => 'Do awesome stuff'
        ));
        Post::create(array(
            'user_id' => 2,
            'title' => 'How to be Glenn',
            'body'    => 'Do awesome stuff'
        ));
        Post::create(array(
            'user_id' => 5,
            'title' => 'asdasds',
            'body'    => 'Do awesome stuff'
        ));
        Post::create(array(
            'user_id' => 8,
            'title' => 'Hasdasdg',
            'body'    => 'Do awesome stuff'
        ));
    }

}