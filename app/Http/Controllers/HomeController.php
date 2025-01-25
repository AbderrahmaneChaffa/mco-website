<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Match;
use App\Models\Matche;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Récupérer les dernières actualités
        $posts = Post::latest()->take(5)->get();

        // Récupérer les prochains matchs
        $matches = Matche::where('date', '>', now())->orderBy('date')->take(5)->get();

        // Récupérer les derniers résultats
        $results = Matche::where('date', '<', now())->orderBy('date', 'desc')->take(5)->get();

        return view('home', compact('posts', 'matches', 'results'));
    }
}