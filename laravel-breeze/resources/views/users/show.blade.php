<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profil') }}
        </h2>
    </x-slot>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
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
</style>
