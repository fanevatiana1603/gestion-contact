<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TarifForfaitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('tarif_forfaits')->truncate();

        DB::table('tarif_forfaits')->insert([
            //TARIF 12
           [
                'id_forfait' => 1,
                'id_tarif' => 1,
                'prix' => '6666667',
            ],

            [
                'id_forfait' => 2,
                'id_tarif' => 1,
                'prix' => '18750',
            ],

            [
                'id_forfait' => 3,
                'id_tarif' => 1,
                'prix' => '58333',
            ],

            [
                'id_forfait' => 4,
                'id_tarif' => 1,
                'prix' => '91667',
            ],

            [
                'id_forfait' => 5,
                'id_tarif' => 1,
                'prix' => '138600',
            ],

            [
                'id_forfait' => 6,
                'id_tarif' => 1,
                'prix' => '20800',
            ],

            [
                'id_forfait' => 7,
                'id_tarif' => 1,
                'prix' => '318000',
            ],

            [
                'id_forfait' => 8,
                'id_tarif' => 1,
                'prix' => '370500',
            ],

                  //TARIF 24
            [
                'id_forfait' => 1,
                'id_tarif' => 2,
                'prix' => '6000',
            ],

            [
                'id_forfait' => 2,
                'id_tarif' => 2,
                'prix' => '16667',
            ],

            [
                'id_forfait' => 3,
                'id_tarif' => 2,
                'prix' => '50417',
            ],

            [
                'id_forfait' => 4,
                'id_tarif' => 2,
                'prix' => '83333',
            ],

            [
                'id_forfait' => 5,
                'id_tarif' => 2,
                'prix' => '116000',
            ],

            [
                'id_forfait' => 6,
                'id_tarif' => 2,
                'prix' => '174000',
            ],

            [
                'id_forfait' => 7,
                'id_tarif' => 2,
                'prix' => '266000',
            ],

            [
                'id_forfait' => 8,
                'id_tarif' => 2,
                'prix' => '309900',
            ],

        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
