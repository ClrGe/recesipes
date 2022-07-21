<h1>{{ $recipe->name }}</h1>

<h2>{{ $recipe->description }}</h2>


<p>Difficulté : {{ $recipe->difficulty }}</p>

<img src="{{ public_path($mediaRecipe->path) }}" alt="" width="200">


<p>Durée{{ $recipe->cook_duration }} min</p>

@for($i = 0; $i < count($stepsRecipe)-1; $i++)
    <p>Etape {{ $i+1 }}:  {{ $stepsRecipe[$i]['step'] }}</p>
@endfor

<p>Fourchette de prix{{ $recipe->price_range }}</p>


