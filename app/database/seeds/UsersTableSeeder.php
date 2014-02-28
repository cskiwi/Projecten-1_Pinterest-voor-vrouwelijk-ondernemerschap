<?php

class UsersTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('users')->delete();



        User::create(array(
            'id'       => 1,
            'name'     => 'Glenn Latomme',
            'username' => 'cskiwi',
            'email'    => 'glenn.latomme@gmail.com',
            'password' => Hash::make('awesome'),
        ));
        User::create(array(
            'id'       => 2,
            'name'     => 'Jesse Struyvelt',
            'username' => 'jessestr',
            'email'    => 'jstruyvelt@gmail.com',
            'password' => Hash::make('shark'),
        ));
        User::create(array(
            'id'       => 3,
            'name'     => 'Nicolas VanHulle',
            'username' => 'nicolasvh',
            'email'    => 'Nicolas.VanHulle@gmail.com',
            'password' => Hash::make('cat'),
        ));

        User::create(array(
            'id'       => 4,
            'name'     => 'Dummy User 1',
            'username' => 'dummy1',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 5,
            'name'     => 'Dummy User 2',
            'username' => 'dummy2',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 6,
            'name'     => 'Dummy User 3',
            'username' => 'dummy3',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 7,
            'name'     => 'Dummy User 4',
            'username' => 'dummy4',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 8,
            'name'     => '',
            'username' => 'dummy5',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 9,
            'name'     => 'Dummy User 6',
            'username' => 'dummy6',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 10,
            'name'     => 'Dummy User 8',
            'username' => 'dummy7',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 11,
            'name'     => 'Dummy User 9',
            'username' => 'dummy9',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 12,
            'name'     => 'Dummy User 10',
            'username' => 'dummy10',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 13,
            'name'     => 'Dummy User 11',
            'username' => 'dummy11',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 14,
            'name'     => 'Dummy User 12',
            'username' => 'dummy12',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 15,
            'name'     => 'Dummy User 13',
            'username' => 'dummy13',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 16,
            'name'     => 'Dummy User 14',
            'username' => 'dummy15',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 17,
            'name'     => 'Dummy User 16',
            'username' => 'dummy16',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 18,
            'name'     => 'Dummy User 17',
            'username' => 'dummy17',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 19,
            'name'     => 'Dummy User 18',
            'username' => 'dummy18',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 20,
            'name'     => 'Dummy User 19',
            'username' => 'dummy19',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));
    }

}