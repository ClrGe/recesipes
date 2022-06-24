@extends('layouts.app')
@section('title', 'Accueil')


@section('content')
    <body>

        <h3>De nouveaux horizons culinaires</h3>
        <h1>avec reCESIpes</h1>

        <div class="carousel">
            <input type="radio" name="position" checked />
            <input type="radio" name="position" />
            <input type="radio" name="position" />
            <input type="radio" name="position" />
            <input type="radio" name="position" />
            <main id="carousel">
                <div class="item">
                    <img src="PLATS/BROCHETTES_DINDE.jpg">
                </div>
                <div class="item">
                    <img src="PLATS/MEZZE02.jpg">
                </div>
                <div class="item">
                    <img src="PLATS/PIZZA_JAMBON_PARME_ROQUETTE.jpg">
                </div>
                <div class="item">
                    <img src="PLATS/RAMEN_CREVETTES.jpg">
                </div>
                <div class="item">
                    <img src="PLATS/TARTARE_THON_NICOISE.jpg">
                </div>
                </main>
        </div>
    </body>

@endsection

