<?php

namespace Database\Seeders;

use App\Models\Listing;
use Database\Factories\ListingsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(8)->create();
         Listing::factory(5)->create();
        //  Listing::create([
        //      'title'=> 'laravel senior developer',
        //      'tags'=> 'laravel,javascript',
        //      'company'=> 'laracorp',
        //      'location'=> 'Lagos,lagos',
        //      'email'=> 'email@email.com',
        //      'website'=> 'https://www.laracorp.com',
        //      'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Tortor at risus viverra adipiscing at in tellus integer. Nisl tincidunt eget nullam non nisi est. Aliquet bibendum enim facilisis gravida neque convallis a cras semper. Eget nulla facilisi etiam dignissim. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Eu mi bibendum neque egestas congue. Commodo odio aenean sed adipiscing diam. Vitae congue mauris rhoncus aenean vel elit scelerisque. At tempor commodo ullamcorper a.
        //      Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin.',
        //  ]);

        //  Listing::create([
        //     'title'=> 'laravel full-stack developer',
        //     'tags'=> 'laravel,javascript',
        //     'company'=> 'laracorp',
        //     'location'=> 'Lagos,lagos',
        //     'email'=> 'email@email.com',
        //     'website'=> 'https://www.laracorp.com',
        //     'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Tortor at risus viverra adipiscing at in tellus integer. Nisl tincidunt eget nullam non nisi est. Aliquet bibendum enim facilisis gravida neque convallis a cras semper. Eget nulla facilisi etiam dignissim. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Eu mi bibendum neque egestas congue. Commodo odio aenean sed adipiscing diam. Vitae congue mauris rhoncus aenean vel elit scelerisque. At tempor commodo ullamcorper a.
        //     Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin.',
        // ]);

       // \App\Models\User::factory()->create([
       //      'name' => 'Test User',
       //     'email' => 'test@example.com',
       //  ]);
    }
}
