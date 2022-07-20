<?php $__env->startSection('title', 'Login'); ?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />

    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
    <meta name="apple-mobile-web-app-title" content="CodePen" />

    <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />

    <title>
        Recesipes Connexion
    </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <style>
        @import  url("https://fonts.googleapis.com/css?family=Montserrat:400,800");
        header {
            display: inline-block;
            position: absolute;
            width: 100%;
            top: 0;
        }

        * {
            box-sizing: border-box;
            list-style-type: none;
        }

        body {
            background: #f6f5f7;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: "Montserrat", sans-serif;
            height: 100vh;
            margin: -20px 0 50px;
        }

        h1 {
            font-weight: bold;
            margin: 0;
            text-transform: uppercase;
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        span {
            font-size: 12px;
        }

        body a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        button {
            border-radius: 20px;
            border: 1px solid #ff9a80;
            background-color: #ff9a80;
            color: #ffffff;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: #ffffff;
        }

        form {
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        .container {
            background-color: #ff99809c;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            overflow: hidden;
            width: 1000px;
            height: 600px;
            max-width: 100%;
            min-height: 480px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes  show {
            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }
            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            background: #ff9a80;
            background: -webkit-linear-gradient(to right, #ffd09b, #ff9a80);
            background: linear-gradient(to right, #ffd09b, #ff9a80);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #ffffff;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        .social-container {
            margin: 20px 0;
        }

        .social-container a {
            border: 1px solid #dddddd;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }

        footer {
            background-color: #4d414145;
            list-style-type: none;
            color: #ff9a80;
            font-size: 14px;
            bottom: 0;
            position: fixed;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 999;
            border-top: 2px solid black;
        }

        footer p {
            margin: 10px 0;
        }

        footer i {
            color: red;
        }

        footer a {
            list-style-type: none;
            color: white;
        }

        .logo {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 0;
            overflow: hidden;
            position: absolute;
            width: 80px;
            margin-left: 2em;
        }

        .top-nav {
            display: flex;
            list-style-type: none;
            justify-content: center;
            flex-wrap: wrap;
            font-weight: bold;
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #ffd09b8a;
            position: -webkit-sticky;
            /* Safari */
            position: sticky;
            top: 0;
            border-bottom: 2px solid #ff9a80;
        }

        .nav-items {
            padding: 1em;
            border-right: 1px solid white;
        }

        .top-nav li a {
            display: block;
            color: rgb(107, 86, 86);
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active),
        .active:hover {
            background-color: white;
            color: #ff9a80;
        }

        .active {
            background-color: #ff9a80;
            color: white;
        }

        .refwebsite,
        .connect {
            float: right;
        }

        .ghost:hover {
            background: white;
            color: #ff9a80;
        }

        button:hover {
            background: #ffffff;
            color: #ff9a80;
            border: 2px solid #ff9a80;
        }

        .nav-all {
            display: flex;
            list-style-type: none;
            justify-content: center;
            flex-wrap: wrap;
            margin-left: 10em;
        }

        .elements-right {
            display: flex;
            flex-wrap: wrap;
            margin-right: 2em;
        }

        button:hover {
            transform: scale(1.1);
            color: #ff9a80;
        }

        .top-nav {
            justify-content: space-between;
        }

        .social {
            color: black;
            border: black;
            background-color: white;
            color: #ff9a80;
        }

        .social:hover {
            transform: scale(1.1)
        }

        body {
            background: url('Vecteezy-16-7540-15-2.jpg');
        }

        footer a:hover {
            list-style-type: none;
            color: black;
        }
    </style>
    <script>
        window.console = window.console || function(t) {};
    </script>
    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>
</head>

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


<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
<script id="rendered-js">
    const signUpButton = document.getElementById("signUp");
    const signInButton = document.getElementById("signIn");
    const container = document.getElementById("container");

    signUpButton.addEventListener("click", () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener("click", () => {
        container.classList.remove("right-panel-active");
    });
    //# sourceURL=pen.js
</script>
</body>

</html>
<?php /**PATH C:\CESI\CUBES\Cubes_Web_Mobile\Git\recesipes\laravel-sail\resources\views/Authentification/login.blade.php ENDPATH**/ ?>