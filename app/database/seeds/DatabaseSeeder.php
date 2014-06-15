 <?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

}


/**
*
*	seed des tables péripheriques
*
*/

//instruments
class InstrumentsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('instruments')->delete();

        User::create(array('name_de' => 'Flöte'));
    }
}
// Genres
class GenresTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array('name_de' => 'rock'));
    }
}

//Muscicians
class MusiciansTableSeeder extends Seeder {

    public function run()
    {
        DB::table('musicians')->delete();

        User::create(array('fisrt_name' => 'Karl',
        					'las_name'=> 'Legerfeld',
        					'stagename'=>'Bonzai',
        					));
    }
}

//Platforms		
class PlatformsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('platforms')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//ticket_categories
class TicketCategoriesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('ticket_categories')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//Equipments	
class EquipmentsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('equipments')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//Gifts
class GiftsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('gifts')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//Event_types
class EventTypesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('event_types')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//addresses
class AddressesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('addresses')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//languages
class LanguagesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('languages')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//ressources
class RessourcesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('ressources')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

/**
*
*
*		seed des tables pouvant vivres seules 
*
*
**/

// artist
class ArtistssTableSeeder extends Seeder {

    public function run()
    {
        DB::table('artists')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//images
class ImagesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('images')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//links
class LinksTableSeeder extends Seeder {

    public function run()
    {
        DB::table('links')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//members
class MembersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('members')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//groups
class GroupsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('groups')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}
