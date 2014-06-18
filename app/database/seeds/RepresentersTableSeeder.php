<?php

class RepresentersTableSeeder extends Seeder {

    public function run()
    {
        $event = Event::all();

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('representers')->delete();

        Representer::create(array('email' => 'Bucher@gmx.ch',
                                    'first_name'=>'Hans',
                                    'last_name'=> 'Kochman',
                                    ));

    }
}
