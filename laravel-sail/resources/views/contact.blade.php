@extends('layouts.app')
@section('title', "Contact")

@section('content')

    <div class="page">


        <div class="container">

            <h1>CONTACTEZ NOUS</h1>

            <form action="" method="POST">
                @csrf

                <div class="mail">
                    <div>
                        <label for="email">Mail</label>
                        <input type="text" name="email" id="email" placeholder="recesipes@exemple.com" value="{{ old('email') }}" required>
                    </div>

                    <div>
                        <label for="email-confirm">Confirm Mail</label>
                        <input type="text" name="email-confirm" id="email-confirm" placeholder="recesipes@exemple.com" required>
                    </div>
                </div>


                <div>
                    <label for="subject">Sujet</label>
                    <input type="text" name="subject" id="subject" placeholder="Problème avec ma recette" required value="{{ old('subject') }}">
                </div>

                <div>
                    <label for="message">Message</label>
                    <textarea name="message" placeholder="Votre message très pertinent !" id="message" cols="30" rows="10" style="resize: none" required ></textarea>
                </div>

                <button type="submit">CONFIRMER</button>

            </form>

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

        /*h1 {*/
        /*    position: absolute;*/
        /*    top: 5vh;*/
        /*    left: auto;*/
        /*    right: auto;*/
        /*    padding: 0 2em;*/
        /*    background-color: white;*/
        /*}*/


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .page {
            display: flex;
            flex-direction: column;

            align-items: center;

            font-family: "Open Sans", sans-serif;

            /*background: rgb(255,180,141);*/
            /*background: linear-gradient(45deg, rgba(255,180,141,1) 0%, rgba(255,154,128,1) 100%);*/
        }

        .container {
            width: 35em;
            height: 80vh;
            margin: 8vh auto;

            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;

            border: 1px solid transparent;
            border-radius: 10px;

            box-shadow: -8px 8px 30px rgb(0 0 0 / 23%);

            background-color: white;


        }

        .container form {
            display: flex;
            flex-direction: column;
            gap: 4vh;

            width: 80%;
            margin: 0 auto;
        }

        .container form .mail {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .container form .mail div {
            width: 45%;
        }

        .container form label {
            font-weight: bold;
        }

        .container form input {
            height: 6vh;
            /*border: 2px solid #d1d1d1;*/
            border: none;
            border-radius: 2px;
            background-color: #eeeeee;

            padding: 0 0.5em;
        }

        .container form textarea {
            /*border: 2px solid #d1d1d1;*/
            border: none;
            border-radius: 2px;
            background-color: #eeeeee;
            resize: none;

            padding: 0.5em 0.5em;
        }

        .container div {
            display: flex;
            flex-direction: column;
            gap: 1vh;
        }

        .container button {
            /*padding: 1em 2em;*/
            width: 40%;
            height: 50px;
            margin: auto;

            color: white;
            font-size: 1em;
            /*background-color: #808080;*/

            border: none;
            border-radius: 30px;

            transition-duration: 0.5s;

            background: rgb(255,180,141);
            background: linear-gradient(45deg, rgba(255,180,141,1) 0%, rgba(255,154,128,1) 100%);
        }

        .container button:hover {
            background-color: #4a5568;
        }


    </style>

@endsection
