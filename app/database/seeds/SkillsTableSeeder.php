<?php

use rockit\Event;

//skills
class SkillsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('skills')->delete();

        Skill::create(array('name_de' => 'Barman / Barmaid'));
   }
}

