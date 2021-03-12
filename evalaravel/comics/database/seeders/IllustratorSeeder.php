<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class IllustratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Illustrator')->insert([
            [
                'name' => 'Charlie Adlard',
                'Year_of_birth' => 1966 ,
                'Nationality' => 'United Kingdom',
                
            ],
            [
                'name' => 'Nikopek',
                'Year_of_birth' => 1978,
                'Nationality' => 'France',
            ],
            [
                'name' => 'Frank Miller',
                'Year_of_birth' => 1957,
                'Nationality' => 'USA',
            ],
        ]);
    }
}