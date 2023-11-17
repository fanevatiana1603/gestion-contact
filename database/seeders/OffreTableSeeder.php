<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OffreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('offres')->truncate();

        DB::table('offres')->insert([
            ['offre' => 'Corporate Administration'],
            ['offre' => 'Smart Ultra'],
            ['offre' => 'Smart Pro'],
            ['offre' => 'Wifiber Pro'],
            ['offre' => 'Wifiber Smart'],
            ['offre' => 'Wifiber Ultra'],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
