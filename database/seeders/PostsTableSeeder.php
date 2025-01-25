<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::query()->delete();

        Post::create([
            'title' => 'Première victoire de la saison',
            'content' => 'Le MCO a remporté son premier match de la saison contre l\'équipe X.',
            'image' => 'post1.jpg',
            'category' => 'sportif',
            'author_id' => 1, // ID de l'utilisateur admin
        ]);

        Post::create([
            'title' => 'Nouveau partenariat avec Y',
            'content' => 'Le MCO annonce un nouveau partenariat avec la société Y.',
            'image' => 'post2.jpg',
            'category' => 'partenariats',
            'author_id' => 2, // ID de l'utilisateur supporter
        ]);
    }
}
