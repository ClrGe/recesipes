<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ route('backoffice.index') }}">⬅</a> {{ __('Utilisateurs') }}
        </h2>
    </x-slot>
    <div class="py-12" style="background-color: #22577A;">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table style="text-align: center ;width:100%">
                    <tr style="font-size: 150%;" class="border-b border-gray-200">
                        <td>
                            <div class="p-6 bg-white capitalize">
                                ID
                            </div>
                        </td>
                        <td>
                            <div class="p-6 bg-white capitalize">
                                Prenom
                            </div>
                        </td>
                        <td>
                            <div class="p-6 bg-white capitalize">
                                Nom
                            </div>
                        </td>
                        <td>
                            <div class="p-6 bg-white capitalize">
                                Mail
                            </div>
                        </td>
                        <td>
                            <div class="p-6 bg-white capitalize">
                                Role
                            </div>
                        </td>
                        <td>
                            <div class="p-6 bg-white capitalize">
                                Gestion
                            </div>
                        </td>
                    </tr>
                    @foreach ($users as $user)
                        <tr class="border-b border-gray-200">
                                <td>
                                    <div class="p-6 bg-white capitalize">
                                        {{ $user->id }}
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white capitalize">
                                        {{ $user->first_name }}
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white capitalize">
                                        {{ $user->last_name }}
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white capitalize">
                                        {{ $user->email }}
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white capitalize">
                                        <form id="{{'roleForm'.$user->id}}" method="POST" action="{{ route('backoffice.saverole') }}" enctype="multipart/form-data">
                                            @csrf
                                            <select name="role" class="block p-2 mb-6 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" {{$roles->where("id", $user->role_id)->first()->title == "Administrator" ? "disabled" : ""}}>
                                                @foreach($roles as $role)
                                                    <option value="{{ $role->id }}" {{ $role->id == $user->role_id ? 'selected="selected"' : '' }}>{{ $role->title }}</option>
                                                @endforeach
                                            </select>
                                            <input type="hidden" value="{{ $user->id }}" name="userID"/>
                                        </form>
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white capitalize">
                                        @if($roles->where("title", "Administrator")->first()->id != $user->role_id)
                                            <button type="submit" form="{{'roleForm'.$user->id}}">
                                                ✔ Valider
                                            </button>
                                            <form action="{{ route('api.users.destroy', [$user->id, 'api_token' => Auth::user()->api_token]) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit">
                                                    ❌ Supprimer
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                        </tr>
                    @endforeach
                    <tr class="border-b border-gray-200">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="p-6 bg-white capitalize">
                                <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" href="{{ route('backoffice.users') }}">
                                    Cancel
                                </a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    table{
        text-align: center ;
        width:100%;
    }

    select{
        margin: -10px;
    }
</style>
