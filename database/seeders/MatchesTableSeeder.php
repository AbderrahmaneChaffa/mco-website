<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matche;

class MatchesTableSeeder extends Seeder
{
    public function run()
    {
        Matche::truncate();

        Matche::create([
            'date' => '2023-10-15 20:00:00',
            'opponent' => 'JS Kabylie',
            'competition' => 'Ligue 1',
            'location' => 'Stade Ahmed Zabana',
            'result' => '2-1',
        ]);

        Matche::create([
            'date' => '2023-10-22 18:00:00',
            'opponent' => 'USM Alger',
            'competition' => 'Coupe d\'Algérie',
            'location' => 'Stade du 5 Juillet',
            'result' => null, // Matche à venir
        ]);
    }
}