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
            'name'     => 'Nicolas Vanhulle',
            'username' => 'nicolasvh',
            'email'    => 'Nicolas.Vanhulle@gmail.com',
            'password' => Hash::make('cat'),
        ));

        User::create(array(
            'id'       => 4,
            'name'     => 'Laura Roosen',
            'username' => 'lauraroosen',
            'email'    => 'laura.roosen@gmail.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 5,
            'name'     => 'Daisy Van Vooren',
            'username' => 'daisyvv',
            'email'    => 'daisy.vanvooren@gmail.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 6,
            'name'     => 'Victoria Cuyper',
            'username' => 'victoriacuyper',
            'email'    => 'victoria.cuyper@gmail.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 7,
            'name'     => 'Charlotte Vandenbroucke',
            'username' => 'charlottevdb',
            'email'    => 'charlotte.vandenbroucke@gmail.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 8,
            'name'     => 'Trees Ryckaert',
            'username' => 'treesryckaert',
            'email'    => 'trees.ryckaert@gmail.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 9,
            'name'     => 'Wendy Gillis',
            'username' => 'wendygillis',
            'email'    => 'wendy.gillis@gmail.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 10,
            'name'     => 'Soraya Van Vooren',
            'username' => 'sorayavanvooren',
            'email'    => 'soraya.vanvooren@gmail.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 11,
            'name'     => 'Tanja Eijke',
            'username' => 'tanjaeijke',
            'email'    => 'tanja.eijke@gmail.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 12,
            'name'     => 'Tamara Cabeke',
            'username' => 'tamaracabeke',
            'email'    => 'tamara.cabeke@gmail.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 13,
            'name'     => 'Katrien De Mey',
            'username' => 'katriendm',
            'email'    => 'katrien.demeu@gmail.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 14,
            'name'     => 'Patricia Snebbout',
            'username' => 'patriciasnebbout',
            'email'    => 'patricia.snebbout@gmail.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 15,
            'name'     => 'Marjan Foré',
            'username' => 'marjanforé',
            'email'    => 'marjan.foré@gmail.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 16,
            'name'     => 'Inez Vandenbroucke',
            'username' => 'inezvandenbroucke',
            'email'    => 'inez.vandenbroucke@gmail.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 17,
            'name'     => 'Jacqueline Grootaert',
            'username' => 'jacquelinegrootaert',
            'email'    => 'jacqueline.grootaert@gmail.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 18,
            'name'     => 'Godelieve Lampaert',
            'username' => 'godelievelampaert',
            'email'    => 'godelieve.lampaert@gmail.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 19,
            'name'     => 'Hannah Poppe',
            'username' => 'hannahpoppe',
            'email'    => 'hannah.poppe@gmail.com',
            'password' => Hash::make('dummy1'),
        ));

        User::create(array(
            'id'       => 20,
            'name'     => 'Deborah Vandecastele',
            'username' => 'deborahvd',
            'email'    => 'deborah.vandecastele@gmail.com',
            'password' => Hash::make('dummy1'),
        ));
    }

}