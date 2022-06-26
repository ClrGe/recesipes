@extends('layouts.app')

@section('content')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <h1>Recipe Creation</h1>

    <div class="create-recipe">

        <div class="head">
                <input class="title full-width" type="text" name="title" placeholder="Titre">

                <textarea class="description background full-width" name="description" placeholder="Description"></textarea>
        </div>


        <div class="row">

            <div class="image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK2nG24AYDm6FOEC7jIfgubO96GbRso2Xshu1f8abSYQ&s" alt="">
                <input type="file" name="image" placeholder="Image">
            </div>

            <div class="informations">
                <div class="information-row">
                    <span>Préparation</span>

                    <div class="sub-information">
                        <i class="material-icons">&#xe8b5;</i>
                        <input type="number" min="0" value="0">
                        <span> h </span>
                        <input type="number" min="0" max="59" value="0">
                    </div>
                </div>
                <div class="information-row">
                    <span>Cuisson</span>

                    <div class="sub-information">
                        <i class="material-icons">&#xe2b6;</i>
                        <input type="number" min="0" value="0">
                        <span> h </span>
                        <input type="number" min="0" max="59" value="0">
                    </div>
                </div>
                <div class="information-row">
                    <span>Repos</span>

                    <div class="sub-information">
                        <i class="material-icons">&#xe1a2;</i>
                        <input type="number" min="0" value="0">
                        <span> h </span>
                        <input type="number" min="0" max="59" value="0">
                    </div>
                </div>
                <div class="information-row">
                    <span>Difficulté</span>

                    <div class="sub-information">
                        <i class="material-icons">&#xe561;</i>
                        <select name="difficulty">
                            <option value="1">Facile</option>
                            <option value="2">Moyen</option>
                            <option value="3">Difficile</option>
                        </select>
                    </div>
                </div>
                <div class="information-row">
                    <span>Cout</span>

                    <div class="sub-information">
                        <i class="material-icons">&#xea15;</i>
                        <select name="cost">
                            <option value="1">Eco+</option>
                            <option value="2">Moyen</option>
                            <option value="3">5 étoiles</option>
                        </select>
                    </div>
                </div>
                <div class="information-row">
                    <span>Nombre de personnes</span>

                    <div class="sub-information">
                        <i class="material-icons">&#xe7fd;</i>
                        <input type="number" min="1" max="69" value="2">
                    </div>
                </div>
            </div>

        </div>

        <div class="category">
            <h1>Ingrédients</h1>

            <div class="ingredients-list">
                <div class="ingredient no_delete">
                    <input type="text" name="ingredient" placeholder="Ingrédient">
                    <input type="number" name="quantity" placeholder="Quantité">
                    <select name="mesure" >
                        <option value="1">grammes (g)</option>
                        <option value="2">millilitres (mL)</option>
                        <option value="3">Tasse</option>
                        <option value="4">Tranches</option>
                        <option value="5">Unité</option>
                        <option value="6">c. à café</option>
                        <option value="7">c. à soupe</option>
                    </select>
                    <button onclick="deleteRow()"><i class="material-icons">&#xe872;</i></button>
                </div>
            </div>
            <button onclick="addRow()"  class="add-ingredients">AJOUTER UN INGREDIENT</button>
        </div>


        <div class="category">
            <h1>Etapes</h1>

            <div class="steps-list">
                <div class="step no_delete">
                    <span class="step-number">1</span>
                    <input type="text" name="step" placeholder="Etape">
                    <button onclick="deleteStep()"><i class="material-icons">&#xe872;</i></button>
                </div>
            </div>
            <button onclick="addStep()"  class="add-ingredients">AJOUTER UNE ETAPE</button>
        </div>


    </div>

    <script>
        function deleteRow(){
            var row = event.target.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }

        function addRow(){
            let row = document.createElement("div");
            row.className = "ingredient";
            row.innerHTML = '<input type="text" name="ingredient" placeholder="Ingrédient"><input type="number" name="quantity" placeholder="Quantité"><select name="mesure" ><option value="1">grammes (g)</option><option value="2">kilogrammes (kg)</option><option value="3">litres (L)</option><option value="4">millilitres (mL)</option><option value="5">centilitres (cL)</option><option value="6">c. à café</option><option value="7">c. à soupe</option></select><button onclick="deleteRow()"><i class="material-icons">&#xe872;</i></button>';
            document.getElementsByClassName('ingredients-list')[0].appendChild(row);
        }

        function deleteStep(){
        //    delete last step
            var row = event.target.parentNode.parentNode;
            row.parentNode.removeChild(row);

        }

        function addStep(){
            let row = document.createElement("div");
            row.className = "step";
            row.innerHTML = '<input type="text" name="step" placeholder="Etape"><button onclick="deleteStep()"><i class="material-icons">&#xe872;</i></button>';
            document.getElementsByClassName('ingredients-list')[1].appendChild(row);
        }
    </script>

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

        * {
            margin: 0;
            padding: 0;
            border: none;

            font-family: "Open Sans", sans-serif;
        }

        h1{
            width: calc(100% - 10px);
            padding: 10px;
            background: rgb(255,180,141);
            background: linear-gradient(45deg, rgba(255,180,141,1) 0%, rgba(255,154,128,1) 100%);
        }

        .background {
            border: 1px solid #ccc;
            box-shadow: -3px 3px 11px -2px #858585;
        }

        .create-recipe {
            width: 60vw;

            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2em;

            margin: 20px auto;
        }

        .head {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5em;

            width: 95%;
        }

        .head input {
            text-align: start;
        }



        .title {
            width: 100%;
            height: 2em;
            /*border: 1px solid black;*/
            border: 1px solid #ccc;
            border-radius: 0.5em;
            padding: 0.5em;
        }

        .description {
            width: 100%;
            height: 10em;
            /*border: 1px solid black;*/
            border-radius: 0.5em;
            padding: 0.5em;
        }

        .row {
            width: calc(95% + 1em);

            display: flex;
            flex-direction: row;
            justify-content: space-between;
            gap: 2em;

        }

        .image {
            width: 40vw;
            /*height: 20vw;*/
            /*background-color: #ccc;*/
        }

        .image img {
            width: 100%;

            background-size: contain;
        }

        .informations {
            width: 50vw;
            /*height: 20vw;*/
            /*background-color: #ccc;*/

            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }

        .information-row {
            padding: 20px 120px 20px 20px;

            font-size: 20px ;
            font-weight: 900;


            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            gap: 0.5em;
        }

        input, select{
            padding: 10px 0;
            border: solid  1px #ccc;
            border-radius: 5px;
            text-align: center;
        }

        .sub-information {
            width: 40%;

            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            gap: 0.5em;
        }

        .sub-information input, select {
            width: 100%;
            border-radius: 5px;
            display: flex;
            text-align: center;
        }

        .category{
            width: calc(95% + 1em) ;

            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2vh;
        }

        .ingredients {
            width: calc(95% + 1em) ;

            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2vh;
        }

        .ingredients-list{
            width: 100%;

            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: 1em;
        }

        .ingredient{
            width: 100%;

            display: flex;
            flex-direction: row;
            justify-content: space-between;
            gap: 2em;
        }

        .no_delete button{
            display: none;
        }

        .add-ingredients{
            width: 30%;
            padding: 20px;
        }

    </style>
@endsection
