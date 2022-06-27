@extends('layouts.app')
@section('title', 'Catégories')

@section('content')
    <body>
    <h1>Liste des cétégories</h1>
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
            </div>
            <div class="item">
            </div>
            <div class="item">
            </div>
            <div class="item">
            </div>
            <div class="item">
            </div>
        </main>
    </div>
    </body>
@endsection
