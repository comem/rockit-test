<?php

use rockit\Event;

//Equipments	
class EquipmentsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('equipments')->delete();

        Equipment::create(array('name_de' => 'Piano'));
    }
}
