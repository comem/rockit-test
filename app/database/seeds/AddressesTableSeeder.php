<?php

use rockit\Event;

//addresses
class AddressesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('addresses')->delete();

        Address::create(array('street' => 'Gasser halle 3',
                                'npa' => '1345',
                                'city' => 'Zufingen'));
    }
}

