<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Supprimer tous les utilisateurs
        \App\Models\User::query()->delete();
    
        // Ajouter des utilisateurs de test
        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@mco.dz',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role' => 'admin',
        ]);
    
        \App\Models\User::create([
            'name' => 'Supporter',
            'email' => 'supporter@mco.dz',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role' => 'user',
        ]);
    
        \App\Models\User::create([
            'name' => 'VIP',
            'email' => 'vip@mco.dz',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role' => 'vip',
        ]);
    }
}