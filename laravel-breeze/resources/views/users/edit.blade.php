<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modification du profil') }}
        </h2>
    </x-slot>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <div class="Info p-6 bg-white border-b border-gray-200 capitalize">
                    <form id="userForm" method="POST" action="{{ route('api.users.update', [$user,'api_token' => Auth::user()->api_token]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <fieldset>
                            <legend><b>Prenom</b></legend>
                            <input type="text" name="first_name" value="{{ $user->first_name }}" class="border-transparent focus:border-transparent focus:ring-0">
                        </fieldset>
                        <fieldset>
                            <legend><b>Nom</b></legend>
                            <input type="text" name="last_name" value="{{ $user->last_name }}" class="border-transparent focus:border-transparent focus:ring-0">
                        </fieldset>
                        <fieldset>
                            <legend><b>Email</b></legend>
                            <input type="text" name="email" value="{{ $user->email }}" class="border-transparent focus:border-transparent focus:ring-0">
                        </fieldset>
                        <fieldset>
                            <legend><b>Ancien mot de passe</b></legend>
                            <input type="password" name="oldPW" value="" class="border-transparent focus:border-transparent focus:ring-0">
                        </fieldset>
                        <fieldset>
                            <legend><b>Nouveau mot de passe</b></legend>
                            <input type="password" name="newPW" value="" class="border-transparent focus:border-transparent focus:ring-0">
                        </fieldset>
                        <fieldset>
                            <legend><b>Confirmer mot de passe</b></legend>
                            <input type="password" name="newPWConf" value="" class="border-transparent focus:border-transparent focus:ring-0">
                        </fieldset>
                    </form>
                </div>
                <div class="Photo p-6 bg-white border-b border-gray-200 capitalize">
                    <img height="500" width="500" src="https://sbcf.fr/wp-content/uploads/2018/03/sbcf-default-avatar.png" class="simpleBorder">
                </div>
                <div class="p-6 bg-white border-b border-gray-200 capitalize buttonDiv">
                    <button type="submit" form="userForm" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full editButton">Valider</button>
                    <a href="{{ route('dashboard', [Auth::user()->id]) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full editButton">Annuler</a>
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
    justify-content: center   ;
}

.simpleBorder{
    border: 1px solid black;
}

.editButton{
     margin: 0 5%;
}

input[type=text]:focus,input[type=password]:focus{
    border-bottom: 2px solid #ffa56d;
} 
</style>