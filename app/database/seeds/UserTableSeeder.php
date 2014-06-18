<?php

use rockit\User;

//staffs
class UsersTableSeeder extends Seeder {

    public function run()
    {
        $user = User::all();
        $language = Language::all();
        

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->delete();

        User::create(array('user_id' => $user[0]->id,
                            'language_id'=> $language[0]->id,
                            'email'=> '',
                            'first_name'=>'',
                            'last_name'=>'',
                            'password'=>Hash::make('1234'),
            ));
    }
}
