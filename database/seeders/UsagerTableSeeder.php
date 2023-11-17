<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('usagers')->truncate();

        DB::table('usagers')->insert([

            [
                'forfait_id'=>'1',
                'id_offre'=>'1',
                'id_puce'=>'1',
                'nom'=>'RASOLOFO',
                'prenom'=>'Julio',
                'direction'=>'DI',
                'service'=>'Informatique',
                'ligne'=>'POSTAID',
                'localite'=>'Local',
                'consommation'=>'15000',
            ],

            [
                'forfait_id'=>'1',
                'id_offre'=>'1',
                'id_puce'=>'2',
                'nom'=>'RAKOTO',
                'prenom'=>'Riva',
                'direction'=>'DI',
                'service'=>'Informatique',
                'ligne'=>'POSTAID',
                'localite'=>'Local',
                'consommation'=>'15000',
            ],

        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
