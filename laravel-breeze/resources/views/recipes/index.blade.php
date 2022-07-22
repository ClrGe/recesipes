<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Toutes les recettes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="details">
                        <div class="container flex flex-wrap mx-auto">

                            @foreach ($recipes as $recipe)
                                <div class="w-full p-2 rounded lg:w-1/3 md:w-1/2" >
                                    <a href="{{ route('recipes.show', [$recipe]) }}">

                                        @if($recipe->image == null)
                                            <img class="w-full" src="https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="">
                                        @else
                                            <img class="w-full" src="{{ $recipe->image }}" alt="">
                                        @endif
                                        <div class="font-semibold text-xl text-gray-800 leading-tight h-10">
                                           {{ $recipe->name }}
                                        </div>
                                        <div>
                                            <b>Temps de préparation :</b>
                                            {{ $recipe->preparation_duration }}
                                        </div>
                                        <div>
                                            <b>Temps de cuisson :</b>
                                            {{ $recipe->cook_duration }}
                                        </div>
                                        <div>
                                            <b>Coût :</b>
                                            {{ $recipe->price_range }}
                                        </div>
                                        <div>
                                            <b>Difficulté :</b>
                                            {{ $recipe->difficulty }}
                                        </div>
                                        <div>
                                            <b>Description : </b>
                                            {{ $recipe->description }}
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
