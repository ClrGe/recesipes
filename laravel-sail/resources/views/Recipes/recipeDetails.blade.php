@extends('layouts.app')

@section('content')

    <div class="details">
        <div class="title">
            <span>
                Machin.title
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

    <style>
        .details {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            margin: 0 auto;

            width: 95%;
            height: 100%;
        }

        .title {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            margin-bottom: 20px;
        }

        .row {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .image {
            width: 65%;
            height: 100%;
            background-color: #eeeeee;
        }

        .infos {
            width: 50%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
        }

        .liste-ingredients {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;

            padding: 10px;
            border: 1px solid #ccc;
        }

        .liste-ingredients span {
            font-weight: bold;
        }

        .steps {
            display: flex;
            gap: 2em;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;





            width: 100%;
            height: 100%;
        }

        .step {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            width: 100%;
            height: 100%;

            padding: 10px;

            border: 1px solid #ccc;
        }
    </style>


@endsection


