<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
Use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('role_user')->truncate();

        User::truncate();

        $admin = User::create([
            'name'=>'Rindra',
            'email'=>'rindrafanevatiana@gmail.com',
            'password'=> Hash::make('fanevatiana'),
        ]);

        $auteur = User::create([
            'name'=>'auteur',
            'email'=>'auteur@auteur.com',
            'password'=> Hash::make('fanevatiana'),
        ]);

        $utilisateur = User::create([
            'name'=>'utilisateur',
            'email'=>'utilisateur@utilisateur.com',
            'password'=> Hash::make('fanevatiana'),
        ]);

        $adminRole = Role::where('role', 'admin')->first();
        $auteurRole = Role::where('role', 'auteur')->first();
        $utilisateurRole = Role::where('role', 'utilisateur')->first();

        $admin->roles()->attach($adminRole);
        $auteur->roles()->attach($auteurRole);
        $utilisateur->roles()->attach($utilisateurRole);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        
    }
}
