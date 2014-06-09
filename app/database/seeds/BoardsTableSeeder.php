<?php

class BoardsTableSeeder extends Seeder {

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('boards')->truncate();

        \DB::table('boards')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'user_id' => 15,
                    'title' => 'Poster',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            1 =>
                array (
                    'id' => 2,
                    'user_id' => 10,
                    'title' => 'Homemade Food',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            2 =>
                array (
                    'id' => 3,
                    'user_id' => 5,
                    'title' => 'Photography',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            3 =>
                array (
                    'id' => 4,
                    'user_id' => 11,
                    'title' => 'Programming',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            4 =>
                array (
                    'id' => 5,
                    'user_id' => 20,
                    'title' => 'Education',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            5 =>
                array (
                    'id' => 6,
                    'user_id' => 19,
                    'title' => 'Offers',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            6 =>
                array (
                    'id' => 7,
                    'user_id' => 13,
                    'title' => 'Clothes',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            7 =>
                array (
                    'id' => 8,
                    'user_id' => 6,
                    'title' => 'Jobs',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            8 =>
                array (
                    'id' => 9,
                    'user_id' => 16,
                    'title' => 'Help/Questions',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            9 =>
                array (
                    'id' => 10,
                    'user_id' => 9,
                    'title' => 'Fun facts',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
        ));
    }
}
