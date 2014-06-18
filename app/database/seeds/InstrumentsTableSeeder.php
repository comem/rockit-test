<?php

use rockit\Event;

//instruments
class InstrumentsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('instruments')->delete();

        Instrument::create(array('name_de' => 'Flöte'));
    }
}