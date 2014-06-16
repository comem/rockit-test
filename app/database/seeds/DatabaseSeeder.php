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

		$this->call('InstrumentsTableSeeder');
		$this->call('GenresTableSeeder');
		$this->call('MusiciansTableSeeder');
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
        DB::table('Genres')->delete();

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


//printings_types
class PrintingsTypesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('printings_types')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//functions
class FunctionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('functions')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

/**
*
*
*		seed des tables pouvant vivre seules 
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


/**
*
*
*		Deuxième périphérie (définition de bob )
*
*
**/

//artists_genres
class ArtistsGenresTableSeeder extends Seeder {

    public function run()
    {
        DB::table('artists_genres')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//publications
class PublicationsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('publications')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//tickets
class TicketssTableSeeder extends Seeder {

    public function run()
    {
        DB::table('tickets')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//attributions
class AttributionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('attributions')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//offers
class OffersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('offers')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//printings
class PrintingsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('printings')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//function_member
class FunctionMembersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('function_member')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}


/** 
*
*
* 		Pivot tables 
*
*
**/

//events_needs
class EventNeedsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('events_needs')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//staffs
class StaffsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('staffs')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//group_ressources
class GroupRessourcesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('group_ressources')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//artists_musicains
class ArtistMusicianTableSeeder extends Seeder {

    public function run()
    {
        DB::table('artists_musicains')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}

//performers
class PerfomrmersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('performers')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }
}