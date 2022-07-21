<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mon Espace') }}
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
                                        <aside class="flex w-72 flex-col space-y-2 border-r-2 border-gray-200 bg-white p-2" style="height: 90.5vh" x-show="asideOpen">

                                            <button onclick="changeTab('profil')" id="profilButton" class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-yellow-500">
                                                <span class="text-2xl"><i class="bx bx-user"></i></span>
                                                <span>Profil</span>
                                            </button>

                                            <a href="{{ route('recipes.create') }}" id="newRecipeButton" class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-yellow-500">
                                                <span class="text-2xl"><i class='bx bx-plus-circle'></i></span>
                                                <span>Nouvelle Recette</span>
                                            </a>

                                            <button onclick="changeTab('myRecipes')" id="myRecipesButton" class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-yellow-500">
                                                <span class="text-2xl"><i class='bx bx-list-ul' ></i></span>
                                                <span>Mes recettes</span>
                                            </button>

                                            <button onclick="changeTab('myFav')" id="myFavButton" class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-yellow-500">
                                                <span class="text-2xl"><i class='bx bxs-heart' ></i></span>
                                                <span>Mes favoris</span>
                                            </button>

                                            <button onclick="changeTab('cart')" id="cartButton" class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-yellow-500">
                                                <span class="text-2xl"><i class='bx bx-cart' ></i></span>
                                                <span>Panier</span>
                                            </button>

                                        </aside>

                                        <!-- main content page -->
                                        <div class="w-full p-4">
                                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                                <!-- Profil -->
                                                <section id="profilDiv" class="tabItem">
                                                    <div class="container" >
                                                        <div class="Info p-6 bg-white border-b border-gray-200 capitalize">
                                                            <fieldset>
                                                                <legend><b>Prenom</b></legend>
                                                                <label>{{ $user->first_name }}</label>
                                                            </fieldset>
                                                            <fieldset>
                                                                <legend><b>Nom</b></legend>
                                                                <label>{{ $user->last_name }}</label>
                                                            </fieldset>
                                                            <fieldset>
                                                                <legend><b>Email</b></legend>
                                                                <label>{{ $user->email }}</label>
                                                            </fieldset>
                                                            <fieldset>
                                                                <legend><b>Role</b></legend>
                                                                <label>{{ $role->title }}</label>
                                                            </fieldset>
                                                        </div>
                                                        <div class="Photo p-6 bg-white border-b border-gray-200 capitalize">
                                                            <img height="500" width="500" src="https://sbcf.fr/wp-content/uploads/2018/03/sbcf-default-avatar.png" class="simpleBorder">
                                                        </div>
                                                        <div class="p-6 bg-white border-b border-gray-200 capitalize buttonDiv">
                                                            <a href="{{ route('users.edit', $user) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-full">Modifier le profil</a>
                                                        </div>
                                                    </div>
                                                </section>                                                
                                                <!-- New Recipe -->
                                                <section id="newRecipeDiv" class="tabItem">
                                                    <div class="container">
                                                        <label>newRecipes</label>
                                                    </div>
                                                </section>                                                
                                                <!-- My Recipes -->
                                                <section id="myRecipesDiv" class="tabItem">
                                                    <div class="container">
                                                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                                            @foreach ($myRecipes as $myRecipe)
                                                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg " style="width: 200%;">
                                                                <a href="{{ route('recipes.show', $myRecipe) }}">
                                                                    <div class="p-6 bg-white border-b border-gray-200 capitalize flexHorizontal">
                                                                        ➡️ 
                                                                        {{ $myRecipe->name }} 
                                                                        <b>|</b> 
                                                                        {{ $myRecipe->guest_number }} personne{{ $myRecipe->guest_number > 1 ? 's' : '' }} 
                                                                        <b>|</b> 
                                                                        Aimée {{ count(App\Models\Users\Like::where("recipe_id", $myRecipe->id)->get()) }} fois
                                                                        <b>|</b>
                                                                        <form method="POST" action="{{ route('api.recipes.destroy', [$myRecipe, 'api_token' => Auth::user()->api_token]) }}">
                                                                            @method('delete')
                                                                            @csrf
                                                                            <button type="submit">❌ Supprimer</button>
                                                                        </form>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </section>                                                
                                                <!-- My Favorites -->
                                                <section id="myFavDiv" class="tabItem">
                                                    <div class="container">
                                                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                                            @foreach ($favRecipes as $favRecipe)
                                                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="width: 200%;">
                                                                <a href="{{ route('recipes.show', $myRecipe) }}">
                                                                    <div class="p-6 bg-white border-b border-gray-200 capitalize flexHorizontal">
                                                                        ➡️ 
                                                                        {{ $favRecipe->name }} 
                                                                        <b>|</b> 
                                                                        {{ $favRecipe->guest_number }} personne{{ $favRecipe->guest_number > 1 ? 's' : '' }} 
                                                                        <b>|</b> 
                                                                        <form method="POST" action="{{ route('api.likes.destroy', [App\Models\Users\Like::where('recipe_id', $favRecipe->id)->where('user_id', $user->id)->get()->first(), 'api_token' => Auth::user()->api_token]) }}">
                                                                            @method('delete')
                                                                            @csrf
                                                                            <button type="submit">❌ Supprimer</button>
                                                                        </form>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </section>                                                
                                                <!-- Cart -->
                                                <section id="cartDiv" class="tabItem">
                                                    <div class="container">
                                                    <label>cart</label>
                                                    </div>
                                                </section>                                                
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

                                    function changeTab(tabName)
                                    {
                                        let sections = Array.prototype.slice.call(document.getElementsByClassName("tabItem"));
                                        sections.forEach(function(element){
                                            let elementName =  element.id.split('Div')[0];                                            
                                            let button = document.getElementById(elementName + "Button");
                                            if(element.id.includes(tabName))
                                            {
                                                button.className += " selected";
                                                element.classList.remove("invisible");
                                            }
                                            else
                                            {
                                                button.classList.remove("selected");
                                                element.classList.add("invisible");
                                            }
                                        });
                                    }

                                    document.getElementById("profilButton").click();


                                </script>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .container {  
    display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: 1fr;
  gap: 0px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    "Info Photo";
}

.Info { 
    grid-area: Info; 
    display: flex;
    flex-direction: column;
}
.Photo { 
    grid-area: Photo; 
}

fieldset{
    border: 1px solid black;
    padding-left: 2%;
    padding-bottom: 2%;
    width: 50%;
    margin-top: 5%;
    margin-left: 5%;
}
legend{
    padding: 0 1%;
}
.buttonDiv{
    width: 200%;
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
}

.simpleBorder{
    border: 1px solid black;
}

.selected{
    background-color: #CCCCCC;
}

.invisible{
display: none;
}

.flexHorizontal{
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;

}
</style>

