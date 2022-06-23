@extends('layouts.app')
@section('title', 'auth')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<script src="{{ asset('js/login.js') }}" defer></script>
@section('content')
    <div class="connection">

        <body translate="no">

            <div class="container" id="container">
                <div class="form-container sign-up-container">
                    <form action="#">
                        <p>Renseignez vos informations pour créer votre compte</p>
                        <input type="text" placeholder="Nom" />
                        <input type="text" placeholder="Prénom" />
                        <input type="email" placeholder="Email" />
                        <input type="password" placeholder="Mot de passe" />
                        <input type="password" placeholder="Confirmez votre mot de passe" />
                        <button>Créer un compte</button>
                        <div class="social-container">
                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </form>
                </div>
                <div class="form-container sign-in-container">
                    <form action="#">
                        <h1>Se connecter</h1>
                        <p>Renseignez vos identifiants pour accéder à votre compte</p>

                        <input type="email" placeholder="Email" />
                        <input type="password" placeholder="Password" />
                        <a href="#">Mot de passe oublié ?</a>
                        <button>Se connecter</button>
                        <div class="social-container">
                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </form>
                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <h1>Bienvenue</h1>
                            <button class="ghost" id="signIn">J'ai déjà un compte !</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <h1>ReCESIpes</h1>
                            <button class="ghost" id="signUp">Je n'ai pas encore de compte !</button>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </div>
@endsection
