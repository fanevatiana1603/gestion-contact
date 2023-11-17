<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TarifTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('tarifs')->truncate();

        DB::table('tarifs')->insert([
            ['tarif'=>'Tarif 12'],
            ['tarif'=>'Tarif 24'],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
