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
                            @foreach(App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>

{{--                        input image--}}
                        <x-label value="Image" for="image" class="block text-sm font-medium leading-5 text-gray-700"></x-label>
                        <x-input id="image" name="image" type="file" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></x-input>
                        @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror

                        <x-label value="Nombre de personnes" for="guest_number" class="block text-sm font-medium leading-5 text-gray-700"></x-label>
                        <x-input id="guest_number" name="guest_number" type="number" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></x-input>


                        <div class="ingredient">

                            <x-label value="ingredient[0]" for="ingredients[]" class="block text-sm font-medium leading-5 text-gray-700"></x-label>
                            <select name="ingredients[0]" id="ingredients[0]" class="mt-1 form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                @foreach(App\Models\Ingredient::all() as $ingredient)
                                    <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                                @endforeach
                            </select>


                            <x-input name="ingredients[{{ $ingredient->id }}][amount]" type="number" required></x-input>
                            <select name="ingredients[{{ $ingredient->id }}][unit]" required>
                                <option value="g">g</option>
                                <option value="kg">kg</option>
                                <option value="l">l</option>
                                <option value="ml">ml</option>
                            </select>

                            <x-label value="ingredient[1]" for="ingredients[]" class="block text-sm font-medium leading-5 text-gray-700"></x-label>
                            <select name="ingredients[1]" id="ingredients[1]" class="mt-1 form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                @foreach(App\Models\Ingredient::all() as $ingredient)
                                    <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                                @endforeach
                            </select>


                            <x-input name="ingredients[{{ $ingredient->id }}][amount]" type="number" required></x-input>
                            <select name="ingredients[{{ $ingredient->id }}][unit]" required>
                                <option value="g">g</option>
                                <option value="kg">kg</option>
                                <option value="l">l</option>
                                <option value="ml">ml</option>
                            </select>

                            <button onclick="add_ingredient()" type="button">Ajouter un ingrédient</button>
                        </div>


                        <x-label value="Étapes" for="steps" class="block text-sm font-medium leading-5 text-gray-700"></x-label>
                        <x-input required id="steps" name="steps" type="text" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></x-input>

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
        function add_ingredient(){
            const ingredients_list = document.getElementById('ingredients_list');
            const select = document.getElementById('ingredient');
            const ingredient = select.cloneNode(true);

            ingredients_list.insertBefore(ingredient, ingredients_list.lastChild);
        }
    </script>

</x-app-layout>


