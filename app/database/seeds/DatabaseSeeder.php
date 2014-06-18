<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Eloquent::unguard();

        $this->call('InstrumentsTableSeeder');
        $this->command->info('Instruments table seeded!');
        $this->call('GenresTableSeeder');
        $this->command->info('Genres table seeded!');
        $this->call('MusiciansTableSeeder');
    }

}

/**
 *
 *   seed des tables péripheriques
 *
 */
//instruments
class InstrumentsTableSeeder extends Seeder {

    public function run() {
        DB::table('instruments')->delete();

        Instrument::create(array('name_de' => 'Flöte'));
    }

}

// Genres
class GenresTableSeeder extends Seeder {

    public function run() {
        DB::table('genres')->delete();

        Genre::create(array('name_de' => 'rock'));
    }

}

//Muscicians
class MusiciansTableSeeder extends Seeder {

    public function run() {
        DB::table('musicians')->delete();

        Musician::create(array('fisrt_name' => 'Karl',
            'las_name' => 'Legerfeld',
            'stagename' => 'Bonzai',
        ));
    }

}

//Platforms     
class PlatformsTableSeeder extends Seeder {

    public function run() {
        DB::table('platforms')->delete();

        Platform::create(array('email' => 'foo@bar.com'));
    }

}

//ticket_categories
class TicketCategoriesTableSeeder extends Seeder {

    public function run() {
        DB::table('ticket_categories')->delete();

        Ticket::create(array('email' => 'foo@bar.com'));
    }

}

//Equipments    
class EquipmentsTableSeeder extends Seeder {

    public function run() {
        DB::table('equipments')->delete();

        Equipment::create(array('email' => 'foo@bar.com'));
    }

}

//Gifts
class GiftsTableSeeder extends Seeder {

    public function run() {
        DB::table('gifts')->delete();

        Gift::create(array('email' => 'foo@bar.com'));
    }

}

//Event_types
class EventTypesTableSeeder extends Seeder {

    public function run() {
        DB::table('event_types')->delete();

        EventType::create(array('email' => 'foo@bar.com'));
    }

}

//addresses
class AddressesTableSeeder extends Seeder {

    public function run() {
        DB::table('addresses')->delete();

        Address::create(array('email' => 'foo@bar.com'));
    }

}

//languages
class LanguagesTableSeeder extends Seeder {

    public function run() {
        DB::table('languages')->delete();

        Language::create(array('email' => 'foo@bar.com'));
    }

}

//ressources
class RessourcesTableSeeder extends Seeder {

    public function run() {
        DB::table('ressources')->delete();

        Ressource::create(array('email' => 'foo@bar.com'));
    }

}

//printings_types
class PrintingsTypesTableSeeder extends Seeder {

    public function run() {
        DB::table('printings_types')->delete();

        PrintingType::create(array('email' => 'foo@bar.com'));
    }

}

//functions
class SkillsTableSeeder extends Seeder {

    public function run() {
        DB::table('functions')->delete();

        Skill::create(array('email' => 'foo@bar.com'));
    }

}

/**
 *
 *
 *       seed des tables pouvant vivre seules 
 *
 *
 * */
// artist
class ArtistsTableSeeder extends Seeder {

    public function run() {
        DB::table('artists')->delete();

        Artist::create(array('email' => 'foo@bar.com'));
    }

}

//images
class ImagesTableSeeder extends Seeder {

    public function run() {
        DB::table('images')->delete();

        Images::create(array('email' => 'foo@bar.com'));
    }

}

//links
class LinksTableSeeder extends Seeder {

    public function run() {
        DB::table('links')->delete();

        Link::create(array('email' => 'foo@bar.com'));
    }

}

//members
class MembersTableSeeder extends Seeder {

    public function run() {
        DB::table('members')->delete();

        Member::create(array('email' => 'foo@bar.com'));
    }

}

//groups
class GroupsTableSeeder extends Seeder {

    public function run() {
        DB::table('groups')->delete();

        Group::create(array('email' => 'foo@bar.com'));
    }

}

/**
 *
 *
 *       Deuxième périphérie (définition de bob )
 *
 *
 * */
//artists_genres
class ArtistsGenresTableSeeder extends Seeder {

    public function run() {
        DB::table('artists_genres')->delete();

        ArtistGenre::create(array('email' => 'foo@bar.com'));
    }

}

//publications
class PublicationsTableSeeder extends Seeder {

    public function run() {
        DB::table('publications')->delete();

        Publication::create(array('email' => 'foo@bar.com'));
    }

}

//tickets
class TicketsTableSeeder extends Seeder {

    public function run() {
        DB::table('tickets')->delete();

        Ticket::create(array('email' => 'foo@bar.com'));
    }

}

//attributions
class AttributionsTableSeeder extends Seeder {

    public function run() {
        DB::table('attributions')->delete();

        Attribution::create(array('email' => 'foo@bar.com'));
    }

}

//offers
class OffersTableSeeder extends Seeder {

    public function run() {
        DB::table('offers')->delete();

        Offer::create(array('email' => 'foo@bar.com'));
    }

}

//printings
class PrintingsTableSeeder extends Seeder {

    public function run() {
        DB::table('printings')->delete();

        Printing::create(array('email' => 'foo@bar.com'));
    }

}

//function_member
class FulfillmentsTableSeeder extends Seeder {

    public function run() {
        DB::table('function_member')->delete();

        Fulfillment::create(array('email' => 'foo@bar.com'));
    }

}

/**
 *
 *
 *       Pivot tables 
 *
 *
 * */
//events_needs
class EventNeedsTableSeeder extends Seeder {

    public function run() {
        DB::table('events_needs')->delete();

        EventNeed::create(array('email' => 'foo@bar.com'));
    }

}

//staffs
class StaffsTableSeeder extends Seeder {

    public function run() {
        DB::table('staffs')->delete();

        Staff::create(array('email' => 'foo@bar.com'));
    }

}

//group_ressources
class GroupRessourcesTableSeeder extends Seeder {

    public function run() {
        DB::table('group_ressources')->delete();

        GroupRessource::create(array('email' => 'foo@bar.com'));
    }

}

//artists_musicains
class ArtistMusicianTableSeeder extends Seeder {

    public function run() {
        DB::table('artists_musicains')->delete();

        ArtistMusician::create(array('email' => 'foo@bar.com'));
    }

}

//performers
class PerfomrmersTableSeeder extends Seeder {

    public function run() {
        DB::table('performers')->delete();

        Performer::create(array('email' => 'foo@bar.com'));
    }

}
