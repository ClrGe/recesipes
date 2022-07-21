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
                        <div class="container flex ">

                            <div class="w-full rounded">
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

                            <div class="commentaires">
                                @foreach($evaluations as $evaluation)
                                    @if($evaluation->recipe_id == $recipe->id)
                                        <div class="commentaire">
                                            <div class="commentaire-header">
                                                <div class="commentaire-header-left">
                                                    <div class="commentaire-header-left-avatar">
                                                        <img src="https://media.moddb.com/images/members/5/4550/4549205/duck.jpg" alt="">
                                                    </div>
                                                    <div class="commentaire-header-left-name">
                                                        <b>{{ $user->first_name }} {{ $user->last_name }}</b>
                                                    </div>
                                                </div>
                                                <div class="commentaire-header-right">
                                                    <div class="commentaire-header-right-date">
                                                        <?php
                                                              setlocale(LC_TIME, 'fr_FR.utf8','fra');
                                                        ?>
                                                        {{ strftime('%d %B %Y', strtotime($evaluation->created_at)) }} à {{ date('H:i', strtotime($evaluation->created_at)) }}
                                                    </div>
                                                    <div class="commentaire-header-right-stars">
                                                        @for($i = 0; $i < $evaluation->rating; $i++)
                                                            <i class="fas fa-star"></i>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="commentaire-body">
                                                <div class="commentaire-body-text">
                                                    {{ $evaluation->comment }}
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
</x-app-layout>
