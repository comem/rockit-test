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
        $this->command->info('Instruments table seeded!');
		$this->call('GenresTableSeeder');
        $this->command->info('Genres table seeded!');
		$this->call('MusiciansTableSeeder');
        $this->command->info('Musucians table seeded !');
        $this->call('PlatformsTableSeeder');
        $this->command->info('Platforms table seeded !');
        $this->call('TicketCategoriesTableSeeder');
        $this->command->info('Ticket Categories table seeded !');
        $this->call('EquipmentsTableSeeder');
        $this->command->info('Eqûipments table seeded !');  
        $this->call('GiftsTableSeeder');
        $this->command->info('Gifts table seeded !');
        $this->call('EventTypesTableSeeder');
        $this->command->info('Event Types table seeded !');
        $this->call('AddressesTableSeeder');
        $this->command->info('Addresses table seeded !');
        $this->call('LanguagesTableSeeder');
        $this->command->info('Languages table seeded !');
        $this->call('EquipmentsTableSeeder');
        $this->command->info('Equipments table seeded !');
        //$this->call('RessourcesTableSeeder');
        //$this->command->info('Ressources table seeded !');
        $this->call('PrintingsTypesTableSeeder');
        $this->command->info('Printing Types table seeded !');
        //$this->call('SkillsTableSeeder');
        //$this->command->info('Skills table seeded !');
        $this->call('ArtistsTableSeeder');
        $this->command->info('Artist table seeded !');
        $this->call('ImagesTableSeeder');
        $this->command->info('Images table seeded !');
        $this->call('LinksTableSeeder');
        $this->command->info('Links table seeded !');
        $this->call('MembersTableSeeder');
        $this->command->info('Members table seeded !');
        //$this->call('');
        //$this->command->info('table seeded !');
        //$this->call('');
        //$this->command->info('table seeded !');
        //$this->call('');
        //$this->command->info('table seeded !');
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

        Instrument::create(array('name_de' => 'Flöte'));
    }
}
// Genres
class GenresTableSeeder extends Seeder {

    public function run()
    {
        DB::table('genres')->delete();

        Genre::create(array('name_de' => 'rock'));
    }
}

//Muscicians
class MusiciansTableSeeder extends Seeder {

    public function run()
    {
        DB::table('musicians')->delete();

        Musician::create(array('first_name' => 'Karl',
        					'last_name'=> 'Legerfeld',
        					'stagename'=>'Bonzai',
        					));
    }
}

//Platforms		
class PlatformsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('platforms')->delete();

        Platform::create(array('name' => 'facebook'));
    }
}

//ticket_categories
class TicketCategoriesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('ticket_categories')->delete();

        TicketCategory::create(array('name_de' => 'freier eintritt'));
    }
}

//Equipments	
class EquipmentsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('equipments')->delete();

        Equipment::create(array('name_de' => 'Piano'));
    }
}

//Gifts
class GiftsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('gifts')->delete();

        Gift::create(array('name_de' => 'Tickets (eintritts'));
    }
}

//Event_types
class EventTypesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('event_types')->delete();

        EventType::create(array('name_de' => 'Jazz'));
    }
}

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

//languages
class LanguagesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('languages')->delete();

        Language::create(array('locale' => 'ch-de',
                                'name_de'=> 'Deutsch'));
    }
}

//ressources
// class RessourcesTableSeeder extends Seeder {

//     public function run()
//     {
//         DB::table('ressources')->delete();

//         Ressource::create(array('email' => 'foo@bar.com'));
//     }
// }


//printings_types
class PrintingsTypesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('printing_types')->delete();

        PrintingType::create(array('name_de' => 'flyer'));
    }
}

//skills
//class SkillsTableSeeder extends Seeder {
//
//    public function run()
//    {
//        DB::table('skills')->delete();
//
//        Skill::create(array('name_de' => 'Barman / Barmaid'));
//   }
//}

/**
*
*
*		seed des tables pouvant vivre seules 
*
*
**/

// artist
class ArtistsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('links')->delete();
        DB::table('artists')->delete();

        Artist::create(array('name' => 'Die toten Socken',
                            'short_description_de'=>'Band die nur über kleider singt ',
                            'complete_description_de'=> 'Rock band, die nur über kleider signt und zu populair ist',
                            ));
    }
}

//images
class ImagesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('images')->delete();

        Image::create(array('source' => '/img1.jpg'));
    }
}

//links
class LinksTableSeeder extends Seeder {

    public function run()
    {
        DB::table('links')->delete();

        $artist = Artist::all();

        $totensocken = new Link(array('url'=>"www.totensocken.eu",
                            'name_de'=> 'webseite von die toten Socken',
                            'artist_id'=> $artist[0]->id,
                            ));
        $artist[0]->link()->save($totensocken);

    }
}

//members
class MembersTableSeeder extends Seeder {

    public function run()
    {
         DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('members')->delete();

        Member::create(array('first_name'=>'Steeve',
                                'last_name'=>'Kocher',
                                'email' => 'foo@bar.com'));
    }
}

//groups
class GroupsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('groups')->delete();

        Group::create(array('name_de' => 'Staff'));

        Group::create(array('name_de' => 'Administration'));
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

        ArtistGenre::create(array('email' => 'foo@bar.com'));
    }
}

//publications
class PublicationsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('publications')->delete();

        Publication::create(array('email' => 'foo@bar.com'));
    }
}

//tickets
class TicketsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('tickets')->delete();

        Ticket::create(array('email' => 'foo@bar.com'));
    }
}

//attributions
class AttributionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('attributions')->delete();

        Attribution::create(array('email' => 'foo@bar.com'));
    }
}

//offers
class OffersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('offers')->delete();

        Offer::create(array('email' => 'foo@bar.com'));
    }
}

//printings
class PrintingsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('printings')->delete();

        Printing::create(array('email' => 'foo@bar.com'));
    }
}

//member_skills
class MembersSkillsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('member_skills')->delete();

        MemberSkill::create(array('email' => 'foo@bar.com'));
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

        EventNeed::create(array('email' => 'foo@bar.com'));
    }
}

//staffs
class StaffsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('staffs')->delete();

        Staff::create(array('email' => 'foo@bar.com'));
    }
}

//group_ressources
class GroupRessourcesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('group_ressources')->delete();

        GroupRessource::create(array('email' => 'foo@bar.com'));
    }
}

//artists_musicains
class ArtistMusicianTableSeeder extends Seeder {

    public function run()
    {
        DB::table('artists_musicains')->delete();

        ArtistMusician::create(array('email' => 'foo@bar.com'));
    }
}

//performers
class PerfomrmersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('performers')->delete();

        Performer::create(array('email' => 'foo@bar.com'));
    }
}