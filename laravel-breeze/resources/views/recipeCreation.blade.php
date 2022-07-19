<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">




                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                <form method="POST" action="action.php">

                                    <div class="mb-4">
                                        <label class="text-xl text-gray-600">Nom de la recette <span
                                                class="text-red-500">*</span></label></br>
                                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title"
                                            id="title" value="">
                                    </div>

                                    <div class="mb-4">
                                        <label class="text-xl text-gray-600">Description</label></br>
                                        <input type="text" class="border-2 border-gray-300 p-2 w-full"
                                            name="description" id="description">
                                    </div>
                                    <div class="mb-4">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK2nG24AYDm6FOEC7jIfgubO96GbRso2Xshu1f8abSYQ&s"
                                            alt="">
                                        <input type="file" name="image" placeholder="Image">
                                    </div>

                                    <div class="mb-4">
                                        <div class="mb-4">
                                            Préparation

                                            <div class="sub-information">
                                                <input type="number" min="0" value="0">
                                                h
                                                <input type="number" min="0" max="59" value="0">
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            Cuisson

                                            <div class="sub-information">
                                                <input type="number" min="0" value="0">
                                                h
                                                <input type="number" min="0" max="59" value="0">
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            Repos

                                            <div class="sub-information">
                                                <input type="number" min="0" value="0">
                                                h
                                                <input type="number" min="0" max="59" value="0">
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            Difficulté

                                            <div class="mb-4">
                                                <i class="material-icons">&#xe561;</i>
                                                <select name="difficulty">
                                                    <option value="1">Facile</option>
                                                    <option value="2">Moyen</option>
                                                    <option value="3">Difficile</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-4">
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
                                        <div class="mb-4">
                                            <span>Nombre de personnes</span>

                                            <div class="sub-information">
                                                <i class="material-icons">&#xe7fd;</i>
                                                <input type="number" min="1" max="69" value="2">
                                            </div>
                                        </div>
                                    </div>

                            </div>

                            <div class="mb-4">
                                <h1>Ingrédients</h1>

                                <div class="ingredients-list">
                                    <div class="ingredient no_delete">
                                        <input type="text" name="ingredient" placeholder="Ingrédient">
                                        <input type="number" name="quantity" placeholder="Quantité">
                                        <select name="mesure">
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
                                <button onclick="addRow()" class="add-ingredients">AJOUTER UN INGREDIENT</button>
                            </div>


                            <div class="mb-8">
                                <label class="text-xl text-gray-600">Étapes <span
                                        class="text-red-500">*</span></label></br>
                                <textarea name="content" class="border-2 border-gray-500">

                            </textarea>
                            </div>

                            <div class="flex p-1">
                                <select class="border-2 border-gray-300 border-r p-2" name="action">
                                    <option>Publier</option>
                                    <option>Enregistrer</option>
                                </select>
                                <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400"
                                    required>Envoyer</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

            <script>
            CKEDITOR.replace('content');
            </script>




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
                    <select name="mesure">
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
            <button onclick="addRow()" class="add-ingredients">AJOUTER UN INGREDIENT</button>
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
            <button onclick="addStep()" class="add-ingredients">AJOUTER UNE ETAPE</button>
        </div>


    </div>

</x-app-layout>
