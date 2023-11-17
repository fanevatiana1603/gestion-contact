<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ForfaitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('forfaits')->truncate();

        DB::table('forfaits')->insert([
            [
                'nomforfait' => 'GigaPro 500',
                'volume' => '500 Mo',
            ],

            [
                'nomforfait' => 'GigaPro 3',
                'volume' => '3 Go',
            ],

            [
                'nomforfait' => 'GigaPro 10',
                'volume' => '10 Go',
            ],

            [
                'nomforfait' => 'GigaPro 25',
                'volume' => '25 Go',
            ],

            [
                'nomforfait' => 'GigaPro 80',
                'volume' => '80 Go',
            ],

            [
                'nomforfait' => 'GigaPro 120',
                'volume' => '120 Go',
            ],

            [
                'nomforfait' => 'GigaPro 200',
                'volume' => '200 Go',
            ],

            [
                'nomforfait' => 'GigaPro 300',
                'volume' => '300 Go',
            ],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

    }
}
