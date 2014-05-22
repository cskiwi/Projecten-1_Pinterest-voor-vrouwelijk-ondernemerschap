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
                    'user_id' => 15,
                    'board_id' => 2,
                    'title' => 'Wikipedia dog',
                    'description' => 'The domestic dog (Canis lupus familiaris)is a subspecies of the gray wolf (Canis lupus), a member of the Canidae family of the mammalian order Carnivora. The term &quot;domestic dog&quot; is generally used for both domesticated and feral varieties. The dog was the first domesticated animaland has been the most widely kept working, hunting, and pet animal in human history.[citation needed] The word &quot;dog&quot; can also refer to the male of a canine species, as opposed to the word &quot;bitch&quot; which refers to the female of the species.',
                    'imgLocation' => '',
                    'price' => 0,
                    'type' => 'Text',
                    'created_at' => '2014-04-01 10:00:27',
                    'updated_at' => '2014-04-01 10:00:27',
                ),
            1 =>
                array (
                    'id' => 2,
                    'board_id' => 2,
                    'user_id' => 5,
                    'title' => 'Animal Foto',
                    'description' => '',
                    'imgLocation' => 'usr_1_pin1.jpg',
                    'price' => 0,
                    'type' => 'Image',
                    'created_at' => '2014-04-01 10:00:27',
                    'updated_at' => '2014-04-01 10:00:27',
                ),
            2 =>
                array (
                    'id' => 3,
                    'board_id' => 1,
                    'user_id' => 10,
                    'title' => 'Wikipedia Cat',
                    'description' => 'The domestic cat (Felis catus or Felis silvestris catus) is a small, usually furry, domesticated, and carnivorous mammal. It is often called the housecat when kept as an indoor pet, or simply the cat when there is no need to distinguish it from other felids and felines. Cats are often valued by humans for companionship and their ability to hunt vermin and household pests.',
                    'imgLocation' => '',
                    'price' => 0,
                    'type' => 'Text',
                    'created_at' => '2014-04-01 10:00:27',
                    'updated_at' => '2014-04-01 10:00:27',
                ),
            3 =>
                array (
                    'id' => 4,
                    'board_id' => 1,
                    'user_id' => 3,
                    'title' => 'Cat Foto',
                    'description' => '',
                    'imgLocation' => 'usr_1_pin2.jpg',
                    'price' => 0,
                    'type' => 'Image',
                    'created_at' => '2014-04-01 10:00:27',
                    'updated_at' => '2014-04-01 10:00:27',
                ),
            4 =>
                array (
                    'id' => 5,
                    'board_id' => 2,
                    'user_id' => 10,
                    'title' => 'Wikipedia Animal',
                    'description' => 'Animals are multicellular, eukaryotic organisms of the kingdom Animalia or Metazoa. Their description plan eventually becomes fixed as they develop, although some undergo a process of metamorphosis later on in their lives. Most animals are motile, meaning they can move spontaneously and independently. All animals must ingest other organisms or their products for sustenance (see Heterotroph).',
                    'imgLocation' => '',
                    'price' => 0,
                    'type' => 'Text',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            5 =>
                array (
                    'id' => 6,
                    'board_id' => 1,
                    'user_id' => 13,
                    'title' => 'Dog Foto',
                    'description' => '',
                    'imgLocation' => 'usr_1_pin3.jpg',
                    'price' => 0,
                    'type' => 'Image',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            6 =>
                array (
                    'id' => 7,
                    'board_id' => 2,
                    'user_id' => 17,
                    'title' => 'Cat Foto',
                    'description' => '',
                    'imgLocation' => 'usr_1_pin4.jpg',
                    'price' => 0,
                    'type' => 'Image',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            7 =>
                array (
                    'id' => 8,
                    'board_id' => 5,
                    'user_id' => 14,
                    'title' => 'Photography Foto',
                    'description' => '',
                    'imgLocation' => '01.jpg',
                    'price' => 0,
                    'type' => 'Image',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            8 =>
                array (
                    'id' => 9,
                    'board_id' => 3,
                    'user_id' => 17,
                    'title' => 'Wikipedia Imagegraphy',
                    'description' => 'Photography (see section below for etymology) is the art, science and practice of creating durable images by recording light or other electromagnetic radiation, either chemically by means of a light-sensitive material such as Imagegraphic film, or electronically by means of an image sensor. Typically, a lens is used to focus the light reflected or emitted from objects into a real image on the light-sensitive surface inside a camera during a timed exposure. The result in an electronic image sensor is an electrical charge at each pixel, which is electronically processed and stored in a digital image file for subsequent display or processing.',
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
                    'user_id' => 11,
                    'title' => 'Wikipedia',
                    'description' => 'John F. Bolt (1921–2004) was a United States Marine Corps aviator and a decorated flying ace who served during World War II and the Korean War. After dropping out of the University of Florida for financial reasons in 1941, he joined the Marine Corps at the height of World War II. Sent to the Pacific Theater of Operations, he flew an F4U Corsair during the campaigns in the Marshall Islands and New Guinea, claiming six victories against Japanese A6M Zeros. Bolt continued his service through the Korean War, entering combat through an exchange program with the U.S. Air Force in late 1952. Over a period of several weeks in mid-1953, he led flights of F-86 Sabres into combat with MiG-15s of the Chinese Air Force, scoring six victories during fights along the northern border of North Korea, commonly known as "MiG Alley," giving him a total of 12 career victories. Bolt stayed in the Marine Corps until 1962, rising to the rank of lieutenant colonel and serving as an analyst and instructor in his later career. In retirement, he qualified as a lawyer in Florida. He remains the only US Marine to achieve ace status in two wars and was also the only Marine jet fighter ace.',
                    'imgLocation' => '',
                    'price' => 0,
                    'type' => 'Text',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            10 =>
                array (
                    'id' => 11,
                    'board_id' => 5,
                    'user_id' => 12,
                    'title' => 'Wikipedia programming',
                    'description' => 'Computer programming (often shortened to programming) is a process that leads from an original formulation of a computing problem to executable programs. It involves activities such as analysis, understanding, and generically solving such problems resulting in an algorithm, verification of requirements of the algorithm including its correctness and its resource consumption, implementation (or coding) of the algorithm in a target programming language, testing, debugging, and maintaining the source code, implementation of the build system and management of derived artefacts such as machine code of computer programs. The algorithm is often only represented in human-parseable form and reasoned about using logic. Source code is written in one or more programming languages (such as C++, C#, Java, Python, Smalltalk, JavaScript, etc.). The purpose of programming is to find a sequence of instructions that will automate performing a specific task or solve a given problem. The process of programming thus often requires expertise in many different subjects, including knowledge of the application domain, specialized algorithms and formal logic.',
                    'imgLocation' => '',
                    'price' => 0,
                    'type' => 'Text',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            11 =>
                array (
                    'id' => 12,
                    'board_id' => 4,
                    'user_id' => 8,
                    'title' => 'Random programming',
                    'description' => 'int rand() {  random_seed = random_seed * 1103515245 +12345; <br /> return (unsigned int)(random_seed / 65536) % 32768; }',
                    'imgLocation' => '',
                    'price' => 0,
                    'type' => 'Text',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            12 =>
                array (
                    'id' => 13,
                    'board_id' => 7,
                    'user_id' => 1,
                    'title' => 'Olive Oil',
                    'description' => 'Olive oil is a fat obtained from the olive, a traditional tree crop of the Mediterranean Basin. The oil is produced by pressing whole olives.',
                    'imgLocation' => '',
                    'price' => 3.50,
                    'type' => 'Text',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
            13 =>
                array (
                    'id' => 14,
                    'board_id' => 3,
                    'user_id' => 7,
                    'title' => 'Homemade Wine',
                    'description' => 'People have been making wine at home for thousands of years. Wine can be made using any type of fruit, though grapes are the most popular choice. After mixing up the ingredients, you let the wine ferment, then age before bottling. This simple, ancient process results in a delicious wine you can be proud you made yourself.',
                    'imgLocation' => '',
                    'price' => 8.50,
                    'type' => 'Text',
                    'created_at' => '2014-04-01 10:00:28',
                    'updated_at' => '2014-04-01 10:00:28',
                ),
        ));
    }

}
