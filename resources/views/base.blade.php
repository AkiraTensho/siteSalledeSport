<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('Association Sportive')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

                                <!-- Fichiers CSS et JS avec Boostrap !-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body>

<header>

    <h1>Association Sportive</h1>

    <nav>
<a href="#accueil">Accueil</a>
<a href="#contact">Contact</a>
<a href="#cours">Cours</a>
<a href="#mentions-legales">mentions-legales</a>
<a href="#tarifs">Tarifs</a>
</nav>
</header>

    @yield('content')


</body>

<footer>

<a href="/mentions-legales">

</footer>
</html>