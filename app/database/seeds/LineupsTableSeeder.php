<?php

use Rockit\Lineup;

//artists_musicians
class LineupsTableSeeder extends Seeder {

    public function run()
    {
        $artist = Artist::all();
        $musician = Musician::all();
        $instrument = Instrument::all();

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('lineups')->delete();

        lineups:create(array('musician_id' => $musician[0]->id,
                                        'artist_id' => $artist[0]->id,
                                        'instrument_id'=> $musician[0]->id));
    }
}
