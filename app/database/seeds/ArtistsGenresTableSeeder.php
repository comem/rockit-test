<?php

//artists_genres
class ArtistsGenresTableSeeder extends Seeder {

    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('descriptions')->delete();

        $artist = Artist::all();
        $genre = Genre::all();

        Description::create(array('artist_id' => $artist[0]->id,
                                    'genre_id'=> $genre[0]->id));

    }
}

