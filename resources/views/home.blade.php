@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Bienvenue sur le site du MCO</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Dernières actualités -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-bold mb-4">Dernières actualités</h2>
            @foreach ($posts as $post)
                <div class="mb-4">
                    <h3 class="text-lg font-semibold">{{ $post->title }}</h3>
                    <p class="text-gray-700">{{ Str::limit($post->content, 100) }}</p>
                    <a href="#" class="text-green-600 hover:text-green-800">Lire plus</a>
                </div>
            @endforeach
        </div>

        <!-- Prochains matchs -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-bold mb-4">Prochains matchs</h2>
            @foreach ($matches as $match)
                <div class="mb-4">
                    <p class="text-gray-700">{{ $match->opponent }} - {{ $match->date->format('d/m/Y H:i') }}</p>
                </div>
            @endforeach
        </div>

        <!-- Derniers résultats -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-bold mb-4">Derniers résultats</h2>
            @foreach ($results as $result)
                <div class="mb-4">
                    <p class="text-gray-700">{{ $result->opponent }} - {{ $result->result }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection