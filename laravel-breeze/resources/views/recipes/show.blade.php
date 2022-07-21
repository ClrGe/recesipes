<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">
            {{ $recipe->name }}
        </h2>
    </x-slot>

    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="details">
                        <div class="container flex ">

                            <div class="w-full rounded">
                                <div class="flex content-button place-content-between">
                                    <div>
                                        Recette ajoutée le :
                                        <?php
                                        setlocale(LC_TIME, 'fr_FR.utf8','fra');
                                        ?>
                                        <b>{{ strftime('%d %B %Y', strtotime($recipe->created_at)) }} à {{ date('H:i', strtotime($recipe->created_at)) }}</b>
                                        <b> par
                                            @if($user == null)
                                                Anonyme
                                            @else
                                                {{ $user->first_name }} {{ $user->last_name }}
                                            @endif
                                        </b>
                                    </div>

                                    @auth
                                        <div class="farRight" role="group">
    {{--                                        @if(App\Models\Users\Like::where('recipe_id', $recipe->id)->where('user_id', Auth::user()->id)->get()->first() == null)--}}
    {{--                                            <form action="{{ route('api.likes.store', ['api_token' => Auth::user()->api_token]) }}" method="POST">--}}
    {{--                                                @csrf--}}
    {{--                                                <input type="hidden" value="{{ $recipe->id }}" name="recipeID"/>--}}
    {{--                                                <input type="hidden" value="{{ Auth::user()->id }}" name="userID"/>--}}
    {{--                                                <button type="submit" class="bg-gray-400 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">J'aime</button>--}}
    {{--                                            </form>--}}
    {{--                                        @else--}}
{{--                                                <form action="{{ route('api.likes.destroy', [App\Models\Users\Like::where('recipe_id', $recipe->id)->where('user_id', Auth::user()->id)->get()->first(), 'api_token' => Auth::user()->api_token]) }}" method="POST">--}}
{{--                                                    @method ('delete')--}}
{{--                                                    @csrf--}}
{{--                                                    <input type="hidden" value="{{ $recipe->id }}" name="recipeID"/>--}}
{{--                                                    <input type="hidden" value="{{ Auth::user()->id }}" name="userID"/>--}}
{{--                                                    <button type="submit" class="bg-red-400 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Je n'aime plus</button>--}}
{{--                                                </form>--}}
    {{--                                        @endif--}}
                                               <a href="{{ route('recipes.download', $recipe) }}">
                                                   <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" type="submit">
                                                       <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                                                       <span>PDF</span>
                                                   </button>
                                               </a>

                                        </div>
                                    @endauth

                                </div>
                                <div class="image">
                                    <img src="https://media.moddb.com/images/members/5/4550/4549205/duck.jpg" alt="">
                                </div>
                                <div class="capitalize font-semibold text-xl text-gray-800 leading-tight h-10">
                                    {{ $recipe->name }}
                                </div>
                                <div>

                                    <div>Cuisiner pour <input type="number" min="1" max="69"
                                                              value={{ $recipe->guest_number }}></div>

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
                                <div class="h-32">
                                    <b>Étapes : </b>
                                    {{ $recipe->steps }}
                                </div>
                                <div class="liste-ingredients">
                                    <span>Liste des ingrédients</span>
                                    @foreach($ingredients as $ingredient)
                                        @foreach($quantities as $quantity)
                                            @if($quantity->ingredient_id == $ingredient->id)
                                                <div>
                                                    {{ $quantity->quantity }} {{ $quantity->unit }} de {{ $ingredient->name }}
                                                </div>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</x-app-layout>

<style>

    .farRight{
        display: flex;
        flex-direction: row;
        justify-content: end;
    }

</style>
