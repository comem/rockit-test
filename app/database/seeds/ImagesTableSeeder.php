<?php

use rockit\Event;

//images
class ImagesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('images')->delete();

        Image::create(array('source' => '/img1.jpg'));
    }
}

