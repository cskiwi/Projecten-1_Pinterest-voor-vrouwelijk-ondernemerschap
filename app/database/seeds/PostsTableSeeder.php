<?php

class PostsTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('posts')->delete();
        Post::create(array(
            'id'        => 1,
            'user_id'   => rand(0,20),
            'title'     => 'Wikipedia dog',
            'description'      => 'The domestic dog (Canis lupus familiaris)is a subspecies of the gray wolf (Canis lupus), a member of the Canidae family of the mammalian order Carnivora. The term &quot;domestic dog&quot; is generally used for both domesticated and feral varieties. The dog was the first domesticated animaland has been the most widely kept working, hunting, and pet animal in human history.[citation needed] The word &quot;dog&quot; can also refer to the male of a canine species, as opposed to the word &quot;bitch&quot; which refers to the female of the species.',
            'type'      => 'Text',
        ));
        Post::create(array(
            'id'        => 2,
            'user_id'   => rand(0,20),
            'title'     => 'Animal Foto',
            'imgLocation'      => 'usr_1_post1.jpg',
            'type'      => 'Image',
        ));
        Post::create(array(
            'id'        => 3,
            'user_id'   => rand(0,20),
            'title'     => 'Wikipedia Cat',
            'description'      => 'The domestic cat (Felis catus or Felis silvestris catus) is a small, usually furry, domesticated, and carnivorous mammal. It is often called the housecat when kept as an indoor pet, or simply the cat when there is no need to distinguish it from other felids and felines. Cats are often valued by humans for companionship and their ability to hunt vermin and household pests.',
            'type'      => 'Text',
        ));
        Post::create(array(
            'id'        => 4,
            'user_id'   => rand(0,20),
            'title'     => 'Cat Foto',
            'imgLocation'      => 'usr_1_post2.jpg',
            'type'      => 'Image',
        ));
        Post::create(array(
            'id'        => 5,
            'user_id'   => rand(0,20),
            'title'     => 'Wikipedia Animal',
            'description'      => 'Animals are multicellular, eukaryotic organisms of the kingdom Animalia or Metazoa. Their description plan eventually becomes fixed as they develop, although some undergo a process of metamorphosis later on in their lives. Most animals are motile, meaning they can move spontaneously and independently. All animals must ingest other organisms or their products for sustenance (see Heterotroph).',
            'type'      => 'Text',
        ));
        Post::create(array(
            'id'        => 6,
            'user_id'   => rand(0,20),
            'title'     => 'Dog Foto',
            'imgLocation'      => 'usr_1_post3.jpg',
            'type'      => 'Image',
        ));
        Post::create(array(
            'id'        => 7,
            'user_id'   => rand(0,20),
            'title'     => 'Cat Foto',
            'imgLocation'      => 'usr_1_post4.jpg',
            'type'      => 'Image',
        ));
        Post::create(array(
            'id'        => 8,
            'user_id'   => rand(0,20),
            'title'     => 'Photography Foto',
            'imgLocation'      => '01.jpg',
            'type'      => 'Image',
        ));
        Post::create(array(
            'id'        => 9,
            'user_id'   => rand(0,20),
            'title'     => 'Wikipedia Imagegraphy',
            'description'      => 'Photography (see section below for etymology) is the art, science and practice of creating durable images by recording light or other electromagnetic radiation, either chemically by means of a light-sensitive material such as Imagegraphic film, or electronically by means of an image sensor. Typically, a lens is used to focus the light reflected or emitted from objects into a real image on the light-sensitive surface inside a camera during a timed exposure. The result in an electronic image sensor is an electrical charge at each pixel, which is electronically processed and stored in a digital image file for subsequent display or processing.',
            'type'      => 'Text',
        ));
        Post::create(array(
            'id'        => 10,
            'user_id'   => rand(0,20),
            'title'     => 'Wikipedia',
            'description'      => 'John F. Bolt (1921–2004) was a United States Marine Corps aviator and a decorated flying ace who served during World War II and the Korean War. After dropping out of the University of Florida for financial reasons in 1941, he joined the Marine Corps at the height of World War II. Sent to the Pacific Theater of Operations, he flew an F4U Corsair during the campaigns in the Marshall Islands and New Guinea, claiming six victories against Japanese A6M Zeros. Bolt continued his service through the Korean War, entering combat through an exchange program with the U.S. Air Force in late 1952. Over a period of several weeks in mid-1953, he led flights of F-86 Sabres into combat with MiG-15s of the Chinese Air Force, scoring six victories during fights along the northern border of North Korea, commonly known as "MiG Alley," giving him a total of 12 career victories. Bolt stayed in the Marine Corps until 1962, rising to the rank of lieutenant colonel and serving as an analyst and instructor in his later career. In retirement, he qualified as a lawyer in Florida. He remains the only US Marine to achieve ace status in two wars and was also the only Marine jet fighter ace.',
            'type'      => 'Text',
        ));
        Post::create(array(
            'id'        => 11,
            'user_id'   => rand(0,20),
            'title'     => 'Wikipedia programming',
            'description'      => 'Computer programming (often shortened to programming) is a process that leads from an original formulation of a computing problem to executable programs. It involves activities such as analysis, understanding, and generically solving such problems resulting in an algorithm, verification of requirements of the algorithm including its correctness and its resource consumption, implementation (or coding) of the algorithm in a target programming language, testing, debugging, and maintaining the source code, implementation of the build system and management of derived artefacts such as machine code of computer programs. The algorithm is often only represented in human-parseable form and reasoned about using logic. Source code is written in one or more programming languages (such as C++, C#, Java, Python, Smalltalk, JavaScript, etc.). The purpose of programming is to find a sequence of instructions that will automate performing a specific task or solve a given problem. The process of programming thus often requires expertise in many different subjects, including knowledge of the application domain, specialized algorithms and formal logic.',
            'type'      => 'Text',
        ));
        Post::create(array(
            'id'        => 12,
            'user_id'   => rand(0,20),
            'title'     => 'Random programming',
            'description'      => 'int rand() {  random_seed = random_seed * 1103515245 +12345; <br /> return (unsigned int)(random_seed / 65536) % 32768; }',
            'type'      => 'Text',
        ));
    }

}