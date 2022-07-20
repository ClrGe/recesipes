<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Liste des recettes
                </div>

                @foreach($recipes as $recipe)
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex justify-between items-center">
                            <div class="flex-1">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    {{ $recipe->name }}
                                </h3>
                                <p class="mt-1 text-base leading-6 text-gray-500">
                                    {{ $recipe->description }}
                                </p>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="{{ route('recipes.destroy', $recipe) }}" class="text-red-600 hover:text-red-900">
                                    Supprimer
                                </a>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="{{ route('recipes.show', $recipe) }}" class="text-indigo-500 hover:text-indigo-700">
                                    Voir
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>
