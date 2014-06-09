<?php

class PinTableSeeder extends Seeder {

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pins')->truncate();

        \DB::table('pins')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'board_id' => 2,
                    'user_id' => 10,
                    'title' => 'Delicious Pancake Recipe',
                    'description' => 'Ingredients: -1 egg -1 teaspoon salt -1 tablespoon white sugar -3 tablespoons butter -1 tablespoon white suger -3 1/2 teaspoons baking powder -1 1/2 cups all-purpose flour Directions: 1.In a large bowl, sift together the flour, baking powder, salt and sugar. Make a well in the center and pour in the milk, egg and melted butter; mix until smooth. 2.Heat a lightly oiled griddle or frying pan over medium high heat. Pour or scoop the batter onto the griddle, using approximately 1/4 cup for each pancake. Brown on both sides and serve hot. ',
                    'imgLocation' => 'usr_10_pin1.jpg',
                    'price' => 0,
                    'type' => 'Image',
                    'created_at' => '2014-04-01 10:00:27',
                    'updated_at' => '2014-04-01 10:00:27',
                ),
            1 =>
                array (
                    'id' => 2,
                    'board_id' => 1,
                    'user_id' => 15,
                    'title' => 'Self Made Poster',
                    'description' => 'I make posters like these in my spare time. Hope you like it! Ps: the price is negotiable! ',
                    'imgLocation' => 'usr_15_pin1.jpg',
                    'price' => 10,
                    'type' => 'Offer',
                    'created_at' => '2014-04-01 10:00:27',
                    'updated_at' => '2014-04-01 10:00:27',
                ),
            2 =>
                array (
                    'id' => 3,
                    'board_id' => 3,
                    'user_id' => 5,
                    'title' => 'Artistic Picture',
                    'description' => 'Hi! I study photography at University in Amsterdam. Would love to hear some response on this picture of mine! Thank you!',
                    'imgLocation' => 'usr_5_pin1.jpg',
                    'price' => 0,
                    'type' => 'Image',
                    'created_at' => '2014-04-01 10:00:27',
                    'updated_at' => '2014-04-01 10:00:27',
                ),
            3 =>
                array (
                    'id' => 4,
                    'board_id' => 1,
                    'user_id' => 8,
                    'title' => 'Self Made Poster',
                    'description' => 'Making some nice posters in my free time! If you like them I will post some more!',
                    'imgLocation' => 'usr_8_pin1.jpg',
                    'price' => 0,
                    'type' => 'Image',
                    'created_at' => '2014-04-01 10:00:27',
                    'updated_at' => '2014-04-01 10:00:27',
                ),
            4 =>
                array (
                    'id' => 5,
                    'board_id' => 6,
                    'user_id' => 20,
                    'title' => 'Home made wine!',
                    'description' => 'This is some of my home made red wine. I think it is really delicious and I would love to sell some of them to you!',
                    'imgLocation' => 'usr_20_pin1.jpg',
                    'price' => 5,
                    'type' => 'Offer',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            5 =>
                array (
                    'id' => 6,
                    'board_id' => 1,
                    'user_id' => 8,
                    'title' => 'More posters',
                    'description' => 'Another self made poster made by me!',
                    'imgLocation' => 'usr_8_pin2.jpg',
                    'price' => 0,
                    'type' => 'Image',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            6 =>
                array (
                    'id' => 7,
                    'board_id' => 3,
                    'user_id' => 17,
                    'title' => 'Artistic picture of Animals!',
                    'description' => '',
                    'imgLocation' => 'usr_17_pin1.jpg',
                    'price' => 0,
                    'type' => 'Image',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            7 =>
                array (
                    'id' => 8,
                    'board_id' => 3,
                    'user_id' => 14,
                    'title' => 'Photography Photo',
                    'description' => '',
                    'imgLocation' => 'usr_14_pin1.jpg',
                    'price' => 0,
                    'type' => 'Image',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            8 =>
                array (
                    'id' => 9,
                    'board_id' => 4,
                    'user_id' => 11,
                    'title' => 'Programming Question',
                    'description' => 'Anyone know a good site or something else where I can study programming things like php,java,... on my own?',
                    'imgLocation' => '',
                    'price' => 0,
                    'type' => 'Text',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            9 =>
                array (
                    'id' => 10,
                    'board_id' => 3,
                    'user_id' => 12,
                    'title' => 'Beautiful dress for sale',
                    'description' => 'I am selling this dress, because I already have it!',
                    'imgLocation' => 'usr_12_pin1.jpg',
                    'price' => 20,
                    'type' => 'Offer',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            10 =>
                array (
                    'id' => 11,
                    'board_id' => 5,
                    'user_id' => 12,
                    'title' => 'Jeans for sale',
                    'description' => 'Selling jeans only wore it once!',
                    'imgLocation' => 'usr_12_pin2.jpg',
                    'price' => 15,
                    'type' => 'Offer',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            11 =>
                array (
                    'id' => 12,
                    'board_id' => 5,
                    'user_id' => 9,
                    'title' => 'Education',
                    'description' => 'If you are interested in to learn a certain language, click this link www.learnlanguage.com ',
                    'imgLocation' => '',
                    'price' => 0,
                    'type' => 'Text',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            12 =>
                array (
                    'id' => 14,
                    'board_id' => 6,
                    'user_id' => 7,
                    'title' => 'Homemade White Wine',
                    'description' => 'People have been making wine at home for thousands of years. Wine can be made using any type of fruit, though grapes are the most popular choice. After mixing up the ingredients, you let the wine ferment, then age before bottling. This simple, ancient process results in a delicious wine you can be proud you made yourself.',
                    'imgLocation' => 'usr_7_pin1.jpg',
                    'price' => 8.50,
                    'type' => 'Offer',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            13 =>
                array (
                    'id' => 15,
                    'board_id' => 2,
                    'user_id' =>6,
                    'title' => 'Cake',
                    'description' => 'Delicious homemade apple cake! Here is a link to the recipe www.mycakerecipe.com',
                    'imgLocation' => 'usr_6_pin1.jpg',
                    'price' => 0,
                    'type' => 'Image',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            14 =>
                array (
                    'id' => 16,
                    'board_id' => 3,
                    'user_id' => 7,
                    'title' => 'Cookies',
                    'description' => 'Delicious homemade chocolate chip cookies!',
                    'imgLocation' => 'usr_4_pin1.jpg',
                    'price' => 0,
                    'type' => 'Image',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
        ));
    }

}
