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
                                    <b>{{ $recipe->created_at }}</b>
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
                                    <?php for ($i = 0; $i < 10; $i++) { ?>
                                    <div>
                                        Ingrédient <?php echo $i; ?>
                                        Quantité : <?php echo $i; ?>
                                        Mesure : <?php echo $i; ?>
                                    </div>
                                    <?php } ?>
                                </div>
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