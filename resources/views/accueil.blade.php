@extends('base')

@section('content')
    <h2>Bienvenue sur la page d'accueil!</h2>
    <p>Ceci est le contenu de la page d'accueil.</p>

    <img src="{{ asset('public\img\gymnase-equipement-cyclisme-salle.jpg') }}" alt="Image d'exemple1">
    <img src="{{ asset('public\img\machines-exercice-dans-salle-sport-sans-personnes.jpg') }}" alt="Image d'exemple2">

@endsection