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
            'name'     => 'Nicolas VanHulle',
            'username' => 'nicolasvh',
            'email'    => 'Nicolas.VanHulle@gmail.com',
            'password' => Hash::make('cat'),
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

        User::create(array(
            'name'     => 'Dummy User 6',
            'username' => 'd6',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'name'     => 'Dummy User 8',
            'username' => 'd7',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'name'     => 'Dummy User 9',
            'username' => 'd9',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'name'     => 'Dummy User 10',
            'username' => 'd10',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'name'     => 'Dummy User 11',
            'username' => 'd11',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'name'     => 'Dummy User 12',
            'username' => 'd12',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'name'     => 'Dummy User 13',
            'username' => 'd13',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'name'     => 'Dummy User 14',
            'username' => 'd15',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'name'     => 'Dummy User 16',
            'username' => 'd16',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'name'     => 'Dummy User 17',
            'username' => 'd17',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'name'     => 'Dummy User 18',
            'username' => 'd18',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'name'     => 'Dummy User 19',
            'username' => 'd19',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'name'     => 'Dummy User 20',
            'username' => 'd20',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'name'     => 'Dummy User 21',
            'username' => 'd21',
            'email'    => 'dummy@test.com',
            'password' => Hash::make('dummy1'),
        ));
    }

}