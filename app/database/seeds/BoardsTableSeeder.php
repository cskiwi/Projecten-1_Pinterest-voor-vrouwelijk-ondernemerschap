<?php

class BoardsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('boards')->delete();
        Board::create(array(
            'id'        => 1,
            'user_id'   => rand(0,20),
            'title'     => 'Littens',
        ));
        Board::create(array(
            'id'        => 2,
            'user_id'   => rand(0,20),
            'title'     => 'Dogs',
        ));
        Board::create(array(
            'id'        => 3,
            'user_id'   => rand(0,20),
            'title'     => 'Photography',
        ));
        Board::create(array(
            'id'        => 4,
            'user_id'   => rand(0,20),
            'title'     => 'Programming',
        ));
        Board::create(array(
            'id'        => 5,
            'user_id'   => rand(0,20),
            'title'     => 'Random',
        ));
    }

}