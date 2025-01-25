<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mouloudia Club d'Oran (MCO)</title>
    <!-- Inclure les assets compilés par Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font Awesome (pour les icônes) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <!-- En-tête -->
    <header class="bg-red-600 text-white shadow-lg">
        <div class="container mx-auto flex justify-between items-center p-4">
            <!-- Logo -->
            <div class="text-2xl font-bold">
                <a href="/">MCO</a>
            </div>
            <!-- Menu de navigation -->
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="/" class="hover:text-red-200">Accueil</a></li>
                    <li><a href="/actualites" class="hover:text-red-200">Actualités</a></li>
                    <li><a href="/calendrier" class="hover:text-red-200">Calendrier</a></li>
                    <li><a href="/classement" class="hover:text-red-200">Classement</a></li>
                    <li><a href="/boutique" class="hover:text-red-200">Boutique</a></li>
                    <li><a href="/contact" class="hover:text-red-200">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Contenu principal -->
    <main class="container mx-auto p-4">
        @yield('content')
    </main>

    <!-- Pied de page -->
    <footer class="bg-red-800 text-white mt-8">
        <div class="container mx-auto p-4 text-center">
            <p>&copy; {{ date('Y') }} Mouloudia Club d'Oran. Tous droits réservés.</p>
            <div class="mt-2">
                <a href="#" class="text-white hover:text-red-200 mx-2"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-white hover:text-red-200 mx-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white hover:text-red-200 mx-2"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>