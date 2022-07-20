@extends('layouts.app')
@section('title', $recipe->name)

@section('content')
    <div class="details">
        <div class="title">
            <span>
                {{$recipe->name}}
            </span>
            <div class="raccourcis">

            </div>
        </div>
        <div class="row">
            <div class="image">
                <img src="https://media.moddb.com/images/members/5/4550/4549205/duck.jpg" alt="">
            </div>
            <div class="infos">
                <div>Cuisiner pour <input type="number" min="1" max="69" value="2"></div>
                <span class="time">Temps total : X minutes</span>
                <div class="liste-ingredients">
                    <span>Liste des ingrédients</span>
                    <?php for ($i = 0; $i < 10; $i++) { ?>
                    <div>
                        <span>Ingrédient <?php echo $i; ?></span>
                        <span>Quantité : <?php echo $i; ?></span>
                        <span>Mesure : <?php echo $i; ?></span>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="steps">
            <h1>Etapes</h1>
            <?php for ($i = 0; $i < 10; $i++): ?>
            <div class="step">
                <div class="step-number">
                    <?php echo $i + 1; ?>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>

@endsection
