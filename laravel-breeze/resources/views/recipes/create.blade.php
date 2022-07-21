<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Creation d'une recette

                    <form action="{{ route('recipes.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <x-label value="Nom de la recette" for="name" class="block text-sm font-medium leading-5 text-gray-700"></x-label>
                        <x-input id="name" name="name" type="text" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></x-input>

                        <x-label value="Description" for="description" ></x-label>
                        <x-input id="description" name="description" class="mt-1 form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></x-input>

                        {{--                        category--}}
                        <x-label value="Categorie" for="category_id" class="block text-sm font-medium leading-5 text-gray-700"></x-label>
                        <select name="category_id" id="category_id" class="mt-1 form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                            <option value="">Séléctionner une catégorie</option>
                            @foreach(App\Models\Recipes\Category::all() as $category)
                                <option value="{{ $category->id }}">{{ $category->type }}</option>
                            @endforeach
                        </select>


                        <div class="preview">
                            <img id="file-ip-1-preview" src="" alt="">
                        </div>
                        {{--                        input image--}}
                        <x-label value="Image" for="image" class="block text-sm font-medium leading-5 text-gray-700"></x-label>
                        <x-input onchange="displayImage(event)" id="image" name="image" type="file" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></x-input>
                        @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror

                        <x-label value="Nombre de personnes" for="guest_number" class="block text-sm font-medium leading-5 text-gray-700"></x-label>
                        <x-input id="guest_number" name="guest_number" type="number" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></x-input>


                        <div id="ingredients_list">


                            <div class="ingredient" id="copyNode">
                                <x-label value="ingredient" for="ingredients" class="block text-sm font-medium leading-5 text-gray-700"></x-label>
                                <select id="ingredients" onchange="get_value(this)" class="mt-1 form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option value="">Séléctionner un ingrédient</option>
                                    @foreach(App\Models\Recipes\Ingredient::all() as $ingredient)
                                        <option name="{{ $ingredient->id }}" value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                                    @endforeach
                                </select>

                                <x-input id="ingredients_id_1" name="ingredients[{{ $ingredient->id }}][id]" value="{{ $ingredient->id }}" type="hidden" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></x-input>
                                <x-input id="ingredients_quantity_1" name="ingredients[{{ $ingredient->id }}][quantity]" type="number" required></x-input>
                                <select id="ingredients_unit_1" name="ingredients[{{ $ingredient->id }}][unit]" required>
                                    <option value="g">g</option>
                                    <option value="kg">kg</option>
                                    <option value="ml">ml</option>
                                    <option value="cL">cL</option>
                                    <option value="l">l</option>
                                </select>
                            </div>

                        </div>


                        <button onclick="add_ingredient()" type="button">Ajouter un ingrédient</button>


                        <div class="steps_list" id="steps_list">
                            <div id="step_copyNode">
                                <x-label value="Étapes" for="steps" class="block text-sm font-medium leading-5 text-gray-700"></x-label>
                                <x-input required id="steps" name="steps[1]" type="text" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></x-input>
                            </div>
                        </div>

                        <button onclick="add_step()" type="button">Ajouter une étape</button>

                        <select required name="price_range">
                            <option value="Eco +">Eco +</option>
                            <option value="Moyen">Moyen</option>
                            <option value="PIB Suisse">PIB Suisse</option>
                        </select>

                        <select required name="difficulty">
                            <option value="Facile">Facile</option>
                            <option value="Moyen">Moyen</option>
                            <option value="Difficile">Difficile</option>
                        </select>

                        <x-label value="Durée de préparation" for="preparation_duration" class="block text-sm font-medium leading-5 text-gray-700"></x-label>
                        <x-input required id="preparation_duration" name="preparation_duration" type="number" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></x-input>

                        <x-label value="Durée de repos" for="resting_duration" class="block text-sm font-medium leading-5 text-gray-700"></x-label>
                        <x-input required id="resting_duration" name="resting_duration" type="number" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></x-input>

                        <x-label value="Durée de cuisson" for="cook_duration" class="block text-sm font-medium leading-5 text-gray-700"></x-label>
                        <x-input required id="cook_duration" name="cook_duration" type="number" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></x-input>


                        <button type="submit">Créer la recette</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        var number_of_ingredients = 1;

        function get_value(object) {
            let value = object.value;

            let ingredients_id = object.nextElementSibling;
            ingredients_id.value = value;
            ingredients_id.name = "ingredients[" + value + "][id]";

            let ingredients_quantity = ingredients_id.nextElementSibling;
            ingredients_quantity.name = "ingredients[" + value + "][quantity]";

            let ingredients_unit = ingredients_quantity.nextElementSibling;
            ingredients_unit.name = "ingredients[" + value + "][unit]";


        }

        function add_ingredient(){

            number_of_ingredients++;

            let list = document.getElementById('ingredients_list');
            let copyNode = document.getElementById('copyNode');
            let newNode = copyNode.cloneNode(true);

            // newNode.id = 'copyNode' + number_of_ingredients;
            newNode.children[1].id = 'ingredients_id_' + number_of_ingredients;
            newNode.children[1].name = 'ingredients['+ number_of_ingredients +'][id]';
            newNode.children[2].id = 'ingredients_quantity_' + number_of_ingredients;
            newNode.children[2].name = 'ingredients['+ number_of_ingredients +'][quantity]';
            newNode.children[3].id = 'ingredients_unit_' + number_of_ingredients;
            newNode.children[3].name = 'ingredients['+ number_of_ingredients +'][unit]';

            list.appendChild(newNode);

        }

        var number_of_steps = 1;

        function add_step(){
            number_of_steps ++;

            let steps_list = document.getElementById('steps_list');
            let step_card = document.getElementById('step_copyNode');

            let details = document.createElement('div');
            details.classList.add('step');

            let input = document.createElement('input');
            input.type = 'text';
            input.name = 'steps[' + number_of_steps + ']';
            input.required = true;
            details.appendChild(input);

            let button = document.createElement('button');
            button.type = 'button';
            button.innerHTML = 'Supprimer';
            button.onclick = function(){
                this.parentElement.remove();
            };
            details.appendChild(button);

            document.getElementById('steps').parentElement.appendChild(details);
        }

        function displayImage(event){
            if(event.target.files.length > 0){
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>

</x-app-layout>
