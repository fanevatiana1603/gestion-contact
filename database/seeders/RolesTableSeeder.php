<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        
        Role::truncate();

        Role::create(['role' => 'admin']);
        Role::create(['role' => 'auteur']);
        Role::create(['role' => 'utilisateur']);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
