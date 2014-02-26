<?php

class BoardsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('boards')->delete();
        Board::create(array(
            'id'        => 1,
            'user_id'   => rand(0,20),
            'title'     => 'Board kittens',
        ));
        Board::create(array(
            'id'        => 2,
            'user_id'   => rand(0,20),
            'title'     => 'Board dogs',
        ));
        Board::create(array(
            'id'        => 3,
            'user_id'   => rand(0,20),
            'title'     => 'Board photography',
        ));
        Board::create(array(
            'id'        => 4,
            'user_id'   => rand(0,20),
            'title'     => 'Board programming',
        ));
        Board::create(array(
            'id'        => 5,
            'user_id'   => rand(0,20),
            'title'     => 'Board random',
        ));
    }

}