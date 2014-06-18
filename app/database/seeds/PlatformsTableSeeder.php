<?php

use rockit\Event;

//Platforms		
class PlatformsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('platforms')->delete();

        Platform::create(array('name' => 'facebook'));
    }
}

