<div class="container" style="padding: 1rem; background: #f5f5f5;">
    <h1>
        Message de ReCesipes
    </h1>
    <p>
        @if($mailData['message'] != null)
            {{$mailData['message']}}
        @endif
    </p>
    <div> Nom de recette : {{ $recipe->name }}</div>

    <div>Description de la recette {{ $recipe->description }}</div>


    <p>Difficulté : {{ $recipe->difficulty }}</p>

    @if($mediaRecipe != null)
        <div><img src="{{ public_path($mediaRecipe->path) }}" alt="" width="200"></div>
    @endif


    <p>Durée{{ $recipe->cook_duration }} min</p>

    @for($i = 0; $i < count($stepsRecipe)-1; $i++)
        <p>Etape {{ $i+1 }}:  {{ $stepsRecipe[$i]['step'] }} </p>
    @endfor

    <p>Fourchette de prix{{ $recipe->price_range }}</p>

</div>
