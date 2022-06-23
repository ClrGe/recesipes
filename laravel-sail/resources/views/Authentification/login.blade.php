@extends('layouts.app')
@section('title', "Se connecter")

@section('content')

    <div class="page">
        <h1>Connexion</h1>

        <div class="container">

            <form action="" method="POST">
                @csrf

                <div>
                    <label for="email">Mail</label>
                    <input type="text" name="email" id="email" placeholder="recesipes@exemple.com" value="{{ old('email') }}" required>
                </div>

                <div>
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" placeholder="Tartiflette" required>
                </div>

                <button type="submit">Confirmer</button>

            </form>

            <div class="no-account">
                <span>Pas de compte ?</span>
                <span><a href="">S'inscrire</a></span>
            </div>

        </div>
    </div>


    <style>
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 300;
            src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTXhCUOGz7vYGh680lGh-uXM.woff) format('woff');
        }
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans'), local('OpenSans'), url(https://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3T8E0i7KZn-EPnyo3HZu7kw.woff) format('woff');
        }
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            src: local('Open Sans Semibold'), local('OpenSans-Semibold'), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSnhCUOGz7vYGh680lGh-uXM.woff) format('woff');
        }

        h1 {
            position: absolute;
            top: 5vh;
            left: auto;
            right: auto;
            padding: 0 2vw;
            background-color: white;
        }

        .page {
            display: flex;
            flex-direction: column;

            align-items: center;

            font-family: "Open Sans", sans-serif;
        }

        .container {
            width: 45vw;
            height: 80vh;
            margin: 8vh auto;

            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;

            border: 2px solid #666666;
            border-radius: 10px;
        }

        .container form {
            display: flex;
            flex-direction: column;
            gap: 4vh;

            width: 50%;
            margin: 0 auto;
        }

        .container form label {
            font-weight: bold;
        }

        .container form input {
            height: 6vh;
            border: 2px solid #d1d1d1;
            border-radius: 5px;

            padding: 0 0.5vw;
        }

        .container div {
            display: flex;
            flex-direction: column;
            gap: 1vh;
        }

        .container button {
            padding: 2vw;
            width: 50%;
            margin: auto;

            color: white;
            background-color: #808080;

            border: none;
            border-radius: 5px;

            transition-duration: 0.5s;
        }

        .container button:hover {
            background-color: #4a5568;
        }

        .no-account {
            display: flex;
            flex-direction: column;
            gap: 1vh;
            align-items: center;
        }


    </style>
@endsection
