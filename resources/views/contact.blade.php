@extends('base')

@section('content')
    <h2>Contact</h2>

    <div class="contact-container">
        <div class="contact-info">
            <h2>Coordonnées</h2>
            <p>Téléphone: 06 00 00 00 00</p>
            <p>Adresse: 5 Bd Louis XIV, 59800 Lille</p>
        </div>
        
        <div class="contact-form">
            <h2>Contactez-nous</h2>
            <form action="#" method="post">
                <label for="email">Votre Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="demande">Votre Demande:</label>
                <input type="text" id="demande" name="demande" required>

                <label for="message">Votre Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Envoyer</button>
            </form>
        </div>
    </div>

@endsection