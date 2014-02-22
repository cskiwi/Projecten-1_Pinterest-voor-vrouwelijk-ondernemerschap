<?php

class BoardTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('boards')->delete();
        Board::create(array(
            'id'        => 1,
            'user_id'   => 1,
            'title'     => 'Board 1',
        ));
        Board::create(array(
            'id'        => 2,
            'user_id'   => 1,
            'title'     => 'Board 2',
        ));
        Board::create(array(
            'id'        => 3,
            'user_id'   => 2,
            'title'     => 'Board 3',
        ));
        Board::create(array(
            'id'        => 4,
            'user_id'   => 5,
            'title'     => 'Board 4',
        ));
        Board::create(array(
            'id'        => 5,
            'user_id'   => 8,
            'title'     => 'Board 5',
        ));
    }

}