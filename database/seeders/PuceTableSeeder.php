<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PuceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('puces')->truncate();

        DB::table('puces')->insert([
            [
                'numero'=>'34 32 953 84',
                'numpuk'=>'2345',
                'numserial'=>'132454',
                'operateur'=>'Telma',
            ],

            [
                'numero'=>'32 32 953 84',
                'numpuk'=>'2345',
                'numserial'=>'132454',
                'operateur'=>'Orange',
            ],

            [
                'numero'=>'33 32 953 84',
                'numpuk'=>'2345',
                'numserial'=>'132454',
                'operateur'=>'Airtel',
            ],

            [
                'numero'=>'34 40 868 13',
                'numpuk'=>'2345',
                'numserial'=>'132454',
                'operateur'=>'Telma',
            ],

            [
                'numero'=>'38 317 603 12',
                'numpuk'=>'2345',
                'numserial'=>'132454',
                'operateur'=>'Telma',
            ],

            [
                'numero'=>'32 40 113 30',
                'numpuk'=>'2345',
                'numserial'=>'132454',
                'operateur'=>'Orange',
            ],

            [
                'numero'=>'32 50 113 30',
                'numpuk'=>'2345',
                'numserial'=>'132454',
                'operateur'=>'Orange',
            ],

            [
                'numero'=>'32 40 120 30',
                'numpuk'=>'2345',
                'numserial'=>'132454',
                'operateur'=>'Orange',
            ],

            [
                'numero'=>'32 61 113 30',
                'numpuk'=>'2345',
                'numserial'=>'132454',
                'operateur'=>'Orange',
            ],

            [
                'numero'=>'33 40 113 30',
                'numpuk'=>'2345',
                'numserial'=>'132454',
                'operateur'=>'Airtel',
            ],

            [
                'numero'=>'33 50 213 30',
                'numpuk'=>'2345',
                'numserial'=>'132454',
                'operateur'=>'Airtel',
            ],

            [
                'numero'=>'33 52 213 30',
                'numpuk'=>'2345',
                'numserial'=>'132454',
                'operateur'=>'Airtel',
            ],

            [
                'numero'=>'33 17 200 30',
                'numpuk'=>'2345',
                'numserial'=>'132454',
                'operateur'=>'Airtel',
            ],

            [
                'numero'=>'33 10 203 00',
                'numpuk'=>'2345',
                'numserial'=>'132454',
                'operateur'=>'Airtel',
            ],

            [
                'numero'=>'34 46 683 10',
                'numpuk'=>'2345',
                'numserial'=>'132454',
                'operateur'=>'Telma',
            ],

            [
                'numero'=>'32 76 867 90',
                'numpuk'=>'2345',
                'numserial'=>'132454',
                'operateur'=>'Orange',
            ],

            [
                'numero'=>'32 10 203 00',
                'numpuk'=>'2345',
                'numserial'=>'132454',
                'operateur'=>'Orange',
            ],

            [
                'numero'=>'33 43 543 67',
                'numpuk'=>'2345',
                'numserial'=>'132454',
                'operateur'=>'Airtel',
            ],

            [
                'numero'=>'33 54 3678 23',
                'numpuk'=>'2345',
                'numserial'=>'132454',
                'operateur'=>'Airtel',
            ],

            [
                'numero'=>'33 19 10 017',
                'numpuk'=>'2345',
                'numserial'=>'132454',
                'operateur'=>'Airtel',
            ],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
