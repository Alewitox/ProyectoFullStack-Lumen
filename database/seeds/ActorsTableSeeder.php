<?php

use Illuminate\Database\Seeder;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actors')->insert([
            'character_name' => 'como Jack Ryan',
            'actor_name' => 'John Krasinski',
            'img' => 'https://image.tmdb.org/t/p/w276_and_h350_face/nOWwdZURikW22qo6OUSGFCTukgc.jpg',

        ]);

        DB::table('actors')->insert([
            'character_name' => 'como James Greer',
            'actor_name' => 'Wendell Pierce',
            'img' => 'https://image.tmdb.org/t/p/w276_and_h350_face/uOsldo9Pkl0E79UbIXX5tZZmC8F.jpg',

        ]);

        DB::table('actors')->insert([
            'character_name' => 'como Mike ',
            'actor_name' => 'Michael Kelly',
            'img' => 'https://image.tmdb.org/t/p/w1280/iivECyPFmK7SeT3iBtmOgz3n3M7.jpg',

        ]);

        DB::table('actors')->insert([
            'character_name' => 'como Nicolás',
            'actor_name' => 'Jordi Mollà',
            'img' => 'https://image.tmdb.org/t/p/w1280/2XEuPT0T9SRwcpsOXD9vMpm4Vad.jpg',

        ]);

        DB::table('actors')->insert([
            'character_name' => 'como Cathy',
            'actor_name' => 'Abbie Cornish',
            'img' => 'https://image.tmdb.org/t/p/w276_and_h350_face/jqF7psT8XVguBpfBTw7axzVDIdi.jpg',

        ]);

        DB::table('actors')->insert([
            'character_name' => 'como Hanin',
            'actor_name' => 'Dina Shihabi',
            'img' => 'https://image.tmdb.org/t/p/w276_and_h350_face/hYO9X78ymvZSmq9dl36YkveVlNN.jpg',

        ]);

        DB::table('actors')->insert([
            'character_name' => 'como Suleiman',
            'actor_name' => 'Ali Suliman',
            'img' => 'https://image.tmdb.org/t/p/w276_and_h350_face/orQk2ePFL6er4TrdhD0jZ9my3E3.jpg',

        ]);

    }
}
