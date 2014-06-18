<?php

use Rockit\Event;

// event
class EventsTableSeeder extends Seeder {

    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('events')->delete();

        $eventype = EventType::all();
        $Image = Image::all();
        
        Event::create(array('start_date_hour' => '2014-07-07 18:00:00',
                            'image_id'=> $Image[0]->id,
                            'event_type_id'=> $eventype[0]->id,
                            'title_de'=> '',
                            'nb_meal'=>'12',
                            'nb_vegan_meal'=>'0',
                            'nb_places'=>'180',
                            'followed_by_private'=>'0',
                            ));
    }
}

