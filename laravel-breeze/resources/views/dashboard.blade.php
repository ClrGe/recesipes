<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
                                <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />


                                <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
                                <!-- page -->
                                <main class="min-h-screen w-full bg-gray-100 text-gray-700" x-data="layout">
                                    <!-- header page -->
                                    <header
                                        class="flex w-full items-center justify-between border-b-2 border-gray-200 bg-white p-2">
                                        <!-- logo -->
                                        <div class="flex items-center space-x-2">
                                            <button type="button" class="text-3xl" @click="asideOpen = !asideOpen"><i
                                                    class="bx bx-menu"></i></button>
                                        </div>

                                    </header>

                                    <div class="flex">
                                        <!-- aside -->
                                        <aside
                                            class="flex w-72 flex-col space-y-2 border-r-2 border-gray-200 bg-white p-2"
                                            style="height: 90.5vh" x-show="asideOpen">
                                            <a href="route('recipes.create')"
                                               class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                                                <span class="text-2xl"><i class="bx bx-fork"></i></span>
                                                <span>Nouvelle Recette</span>
                                            </a>

                                            <a href="#"
                                               class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                                                <span class="text-2xl"><i class="bx bx-fork"></i></span>
                                                <span>Mes recettes</span>
                                            </a>

                                            <a href="#"
                                               class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                                                <span class="text-2xl"><i class="bx bx-fork"></i></span>
                                                <span>Mes favoris</span>
                                            </a>
                                            <a href="#"
                                               class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                                                <span class="text-2xl"><i class="bx bx-fork"></i></span>
                                                <span>Panier</span>
                                            </a>
                                            <a href="{{ route('users.show', [Auth::user()->id]) }}"
                                               class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                                                <span class="text-2xl"><i class="bx bx-user"></i></span>
                                                <span>Compte</span>
                                            </a>
                                        </aside>

                                        <!-- main content page -->
                                        <div class="w-full p-4">
                                            <div class="mb-4">
                                                <label class="text-xl text-gray-600">Nom de la recette <span
                                                        class="text-red-500">*</span></label></br>
                                                <input type="text" class="border-2 border-gray-300 p-2 w-full"
                                                       name="title" id="title" value="">
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
                                                    <button role="submit"
                                                            class="p-3 bg-blue-500 text-white hover:bg-blue-400"
                                                            required>Envoyer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </main>

                                <script>
                                    document.addEventListener("alpine:init", () => {
                                        Alpine.data("layout", () => ({
                                            profileOpen: false,
                                            asideOpen: true,
                                        }));
                                    });
                                </script>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
