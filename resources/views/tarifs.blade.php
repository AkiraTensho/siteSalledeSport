@extends('base')

@section('content')
    <h2>Tarifs</h2>
    <p>Ceci est le contenu de tous les tarifs.</p>

    <div class="tarifs">
        <div class="prix">
            <h3>Adhésion annuelle à l'association</h3>
            <p>15 euros</p>
        </div> 
        
        <div class="prix">
            <h3>La Séance</h3>
            <p>10 euros</p>
        </div>
        
        <div class="prix">
            <h3>Carnet de 10 séances</h3>
            <p>90 euros</p>
        </div>
        <div class="day">
            <h3>Abonnement mensuel illimité sans cours</h3>
            <p>30 euros</p>
        </div>
        <div class="day">
            <h3>Abonnement mensuel illimité avec cours</h3>
            <p>60 euros</p>
        </div>

@endsection