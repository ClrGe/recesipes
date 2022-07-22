<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">
            {{ $recipe->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="details">
                        <div class="container flex-column">

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

                                    @if(Auth::user()->role_id = '1' || Auth::user()->id == $recipe->user_id)
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
                                    @endif
                                </div>

                                <div class="capitalize font-semibold text-xl text-gray-800 leading-tight h-10">
                                    {{ $recipe->name }}
                                </div>

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

                                            @if($comment->user_id == Auth::user()->id || Auth::user()->role_id == '1')
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
                                            @endif
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

</x-app-layout>
