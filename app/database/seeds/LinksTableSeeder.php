<?php

//links
class LinksTableSeeder extends Seeder {

    public function run()
    {
        DB::table('links')->delete();

        $artist = Artist::all();

        $totensocken = new Link(array('url'=>"www.totensocken.eu",
                            'name_de'=> 'webseite von die toten Socken',
                            'artist_id'=> $artist[0]->id,));
    }
}

