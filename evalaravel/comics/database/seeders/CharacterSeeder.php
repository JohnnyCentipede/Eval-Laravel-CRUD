<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
                'name' => 'Rick Grimms',
                'Year_of_creation' => 2003,
                'Comic' => 'The Walking Dead',
                'Illustrator' => 'Charlie Adlard',
            ],
            [
                'name' => 'Billy Rockerson',
                'Year_of_creation' => 2012,
                'Comic' => 'Rockabilly Zombie Superstar',
                'Illustrator' => 'Nikopek',
            ],
            [
                'name' => 'Marv',
                'Year_of_creation' => 1991,
                'Comic' => 'Sin city',
                'Illustrator' => 'Frank Miller',
            ],
        ]);
    }
}

