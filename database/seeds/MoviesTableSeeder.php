<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Custom entries
        DB::table('movies')->insert([
            [
                'id' => 1,
                'title' => 'Venom',
                'desc' => 'Eddie Brock is a reporter—investigating people who want to go unnoticed. But after he makes a terrible discovery at the Life Foundation, he begins to transform into ‘Venom’. The Foundation has discovered creatures called symbiotes, and believes they’re the key to the next step in human evolution. Unwittingly bonded with one, Eddie discovers he has incredible new abilities—and a voice in his head that’s telling him to embrace the darkness.',
                'show' => '2018-12-21',
                'poster_image_url' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/bURIWlkMbzT8RdpemzCmQECo2Uh.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Venom',
                'desc' => 'Eddie Brock is a reporter—investigating people who want to go unnoticed. But after he makes a terrible discovery at the Life Foundation, he begins to transform into ‘Venom’. The Foundation has discovered creatures called symbiotes, and believes they’re the key to the next step in human evolution. Unwittingly bonded with one, Eddie discovers he has incredible new abilities—and a voice in his head that’s telling him to embrace the darkness.',
                'show' => '2018-12-22',
                'poster_image_url' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/bURIWlkMbzT8RdpemzCmQECo2Uh.jpg'
            ],
            [
                'id' => 3,
                'title' => 'Venom',
                'desc' => 'Eddie Brock is a reporter—investigating people who want to go unnoticed. But after he makes a terrible discovery at the Life Foundation, he begins to transform into ‘Venom’. The Foundation has discovered creatures called symbiotes, and believes they’re the key to the next step in human evolution. Unwittingly bonded with one, Eddie discovers he has incredible new abilities—and a voice in his head that’s telling him to embrace the darkness.',
                'show' => '2018-12-23',
                'poster_image_url' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/bURIWlkMbzT8RdpemzCmQECo2Uh.jpg'
            ],
            [
                'id' => 4,
                'title' => 'Fantastic Beasts: The Crimes of Grindelwald',
                'desc' => 'Gellert Grindelwald has escaped imprisonment and has begun gathering followers to his cause—elevating wizards above all non-magical beings. The only one capable of putting a stop to him is the wizard he once called his closest friend, Albus Dumbledore. However, Dumbledore will need to seek help from the wizard who had thwarted Grindelwald once before, his former student Newt Scamander, who agrees to help, unaware of the dangers that lie ahead. Lines are drawn as love and loyalty are tested, even among the truest friends and family, in an increasingly divided wizarding world.',
                'show' => '2018-12-24',
                'poster_image_url' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/uyJgTzAsp3Za2TaPiZt2yaKYRIR.jpg'
            ],
            [
                'id' => 5,
                'title' => 'Fantastic Beasts: The Crimes of Grindelwald',
                'desc' => 'Gellert Grindelwald has escaped imprisonment and has begun gathering followers to his cause—elevating wizards above all non-magical beings. The only one capable of putting a stop to him is the wizard he once called his closest friend, Albus Dumbledore. However, Dumbledore will need to seek help from the wizard who had thwarted Grindelwald once before, his former student Newt Scamander, who agrees to help, unaware of the dangers that lie ahead. Lines are drawn as love and loyalty are tested, even among the truest friends and family, in an increasingly divided wizarding world.',
                'show' => '2018-12-25',
                'poster_image_url' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/uyJgTzAsp3Za2TaPiZt2yaKYRIR.jpg'
            ],
            [
                'id' => 6,
                'title' => 'Fantastic Beasts: The Crimes of Grindelwald',
                'desc' => 'Gellert Grindelwald has escaped imprisonment and has begun gathering followers to his cause—elevating wizards above all non-magical beings. The only one capable of putting a stop to him is the wizard he once called his closest friend, Albus Dumbledore. However, Dumbledore will need to seek help from the wizard who had thwarted Grindelwald once before, his former student Newt Scamander, who agrees to help, unaware of the dangers that lie ahead. Lines are drawn as love and loyalty are tested, even among the truest friends and family, in an increasingly divided wizarding world.',
                'show' => '2018-12-26',
                'poster_image_url' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/uyJgTzAsp3Za2TaPiZt2yaKYRIR.jpg'
            ],
            [
                'id' => 7,
                'title' => 'Robin Hood',
                'desc' => 'A war-hardened Crusader and his Moorish commander mount an audacious revolt against the corrupt English crown.',
                'show' => '2018-12-27',
                'poster_image_url' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/AiRfixFcfTkNbn2A73qVJPlpkUo.jpg'
            ],
            [
                'id' => 8,
                'title' => 'Robin Hood',
                'desc' => 'A war-hardened Crusader and his Moorish commander mount an audacious revolt against the corrupt English crown.',
                'show' => '2018-12-28',
                'poster_image_url' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/AiRfixFcfTkNbn2A73qVJPlpkUo.jpg'
            ],
            [
                'id' => 9,
                'title' => 'The Predator',
                'desc' => 'When a kid accidentally triggers the universe`s most lethal hunters` return to Earth, only a ragtag crew of ex-soldiers and a disgruntled female scientist can prevent the end of the human race.',
                'show' => '2018-12-29',
                'poster_image_url' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/wMq9kQXTeQCHUZOG4fAe5cAxyUA.jpg'
            ],
            
        ]);

        // Delete generated images
        $files = glob('public/images/movies/generated/*.jpg');
        foreach($files as $file) {
            if(is_file($file))
            unlink($file);
        }

        
    }
}
