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
                                <div class="header_recipe flex justify-between">
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
                                        <div class="flex gap-5">
                                            <a href="{{ route('recipes.edit', $recipe->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                                Modifier
                                            </a>
                                            <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Supprimer</button>
                                            </form>
                                        </div>

                                        <div class="farRight" >
                                            @if(App\Models\Users\Like::where('recipe_id', $recipe->id)->where('user_id', Auth::user()->id)->get()->first() == null)
                                                <form action="{{ route('api.likes.store', ['api_token' => Auth::user()->api_token]) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $recipe->id }}" name="recipeID"/>
                                                    <input type="hidden" value="{{ Auth::user()->id }}" name="userID"/>
                                                    <button type="submit" class="bg-gray-400 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">J'aime</button>
                                                </form>
                                            @else
                                                <form action="{{ route('api.likes.destroy', [App\Models\Users\Like::where('recipe_id', $recipe->id)->where('user_id', Auth::user()->id)->get()->first(), 'api_token' => Auth::user()->api_token]) }}" method="POST">
                                                    @method ('delete')
                                                    @csrf
                                                    <button type="submit" class="bg-red-400 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Je n'aime plus</button>
                                                </form>
                                            @endif
                                            @if(App\Models\ShoppingList::where('recipe_id', $recipe->id)->where('user_id', Auth::user()->id)->get()->first() == null)
                                                <form action="{{ route('api.shoppinglists.store', ['api_token' => Auth::user()->api_token]) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $recipe->id }}" name="recipeID"/>
                                                    <input type="hidden" value="{{ Auth::user()->id }}" name="userID"/>
                                                    <button type="submit" class="bg-gray-400 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Courses +</button>
                                                </form>
                                            @else
                                                <form action="{{ route('api.shoppinglists.destroy', [App\Models\ShoppingList::where('recipe_id', $recipe->id)->where('user_id', Auth::user()->id)->get()->first(), 'api_token' => Auth::user()->api_token]) }}" method="POST">
                                                    @method ('delete')
                                                    @csrf
                                                    <button type="submit" class="bg-red-400 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Course -</button>
                                                </form>
                                            @endif

                                            <a href="{{ route('recipes.download', $recipe) }}" class="bg-gray-400 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded inline-flex items-center" >
                                                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                                                   <span>PDF</span>
                                           </a>

                                            <a href="{{ route('recipes.mail', $recipe) }}" class="bg-gray-400 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded inline-flex items-center" ><svg class="h-6 w-6 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="3" y="5" width="18" height="14" rx="2" />  <polyline points="3 7 12 13 21 7" /></svg>
                                                <span>Email</span>
                                            </a>

                                        </div>
                                    @endauth

                                </div>
                                <div class="capitalize font-semibold text-xl text-gray-800 leading-tight h-10">
                                    {{ $recipe->name }}
                                </div>
                                <div>

                                <div class="flex justify-between">

                                    <div class="image w-1/2">

                                        @if($recipe->image == null)
                                            <img class="w-full" src="https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="">
                                        @else
                                            <img class="w-full" src="{{ $recipe->image }}" alt="">
                                        @endif
                                    </div>

                                    <div class="flex flex-col w-2/5 justify-center content-evenly gap-8">
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
                                    </div>

                                </div>

                                <div>

                                    <div>Cuisiner pour
                                        <input type="number" min="1" max="69" value={{ $recipe->guest_number }}>
                                    </div>

                                </div>

                                <div class="liste-ingredients">
                                    <span>Liste des ingrédients</span>
                                        @foreach($quantities as $quantity)
                                            <div class="flex justify-between">
                                                <div class="w-1/2">
                                                    {{ $quantity->ingredient->name }}
                                                </div>
                                                <div class="w-1/2">
                                                    {{ $quantity->quantity }}
                                                </div>
                                            </div>
                                        @endforeach
{{--                                    @endforeach--}}
                                </div>

                                <div class="liste-etapes">
                                    <span>Liste des étapes</span>
                                    @foreach($steps as $step)
                                        <div>
                                             - {{ $step->description }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div id="comment_list">
                                @foreach($evaluations as $comment)
                                    <div class="comment">
                                        <div class="comment_content">
                                            <div class="comment_author">
                                                <span>{{ $comment->date }}</span>
{{--                                                user = first_name and last_name from user where id = $comment->user_id--}}
                                                <span>{{ $user->first_name }} {{ $user->last_name }}</span>

                                            </div>
                                            <div class="comment_stars">
                                                @for($i = 0; $i < $comment->rating; $i++)
                                                    <i class="fa-solid fa-star"></i>
                                                @endfor
                                                @for($i = 0; $i < 5 - $comment->rating; $i++)
                                                    <i class="fa-solid fa-star"></i>
                                                @endfor
                                            </div>
                                            <div class="comment_text">
                                                {{ $comment->comment }}
                                            </div>

                                            @auth
                                                <div class="comment_delete">
                                                    <a href="{{ route('evaluation.destroy', $comment->id) }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('delete-form-{{ $comment->id }}').submit();">
                                                        <i class="fas fa-trash-alt"></i>
                                                        Supprimer
                                                    </a>
                                                    <form id="delete-form-{{ $comment->id }}" action="{{ route('evaluation.destroy', $comment->id) }}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                            @endauth
                                        </div>
                                    </div>

                                @endforeach
                            </div>

                            <div class="comment_form">
                                <form action="{{ route('evaluation.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
                                    <div class="form-group">
                                        <label for="comment">Commentaire</label>
                                        <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="ranking">Note</label>
                                        <select class="form-control" id="rating" name="rating">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                </form>
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
