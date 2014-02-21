// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Glenn Latomme',
            'username' => 'cskiwi',
            'email'    => 'glenn.latomme@gmail.com',
            'password' => Hash::make('awesome'),
        ));

        User::create(array(
            'name'     => 'Jesse Struyvelt',
            'username' => 'jessestr',
            'email'    => 'jstruyvelt@gmail.com',
            'password' => Hash::make('shark'),
        ));

        User::create(array(
            'name'     => 'Dummy User 1',
            'username' => 'd1',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'name'     => 'Dummy User 2',
            'username' => 'd2',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'name'     => 'Dummy User 3',
            'username' => 'd3',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'name'     => 'Dummy User 4',
            'username' => 'd4',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'name'     => 'Dummy User 5',
            'username' => 'd5',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));
    }

}