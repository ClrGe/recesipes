<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Utilisateurs') }}
        </h2>
    </x-slot>
    <div class="py-12" style="background-color: #22577A;">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table style="text-align: center ;width:100%">
                    <tr style="font-size: 150%;">
                        <td>
                            <div class="p-6 bg-white border-b border-gray-200 capitalize">
                                ID
                            </div>
                        </td>
                        <td>
                            <div class="p-6 bg-white border-b border-gray-200 capitalize">
                                Prenom
                            </div>
                        </td>
                        <td>
                            <div class="p-6 bg-white border-b border-gray-200 capitalize">
                                Nom
                            </div>
                        </td>
                        <td>
                            <div class="p-6 bg-white border-b border-gray-200 capitalize">
                                Mail
                            </div>
                        </td>
                        <td>
                            <div class="p-6 bg-white border-b border-gray-200 capitalize">
                                Role
                            </div>
                        </td>
                        <td>
                            <div class="p-6 bg-white border-b border-gray-200 capitalize">
                                Gestion
                            </div>
                        </td>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                                <td>
                                    <div class="p-6 bg-white border-b border-gray-200 capitalize">
                                        {{ $user->id }}
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white border-b border-gray-200 capitalize">
                                        {{ $user->first_name }}
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white border-b border-gray-200 capitalize">
                                        {{ $user->last_name }}
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white border-b border-gray-200 capitalize">
                                        {{ $user->email }}
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white border-b border-gray-200 capitalize">
                                        @foreach($roles as $role)
                                            @if($role->id == $user->role_id)
                                                {{ $role->title }}
                                            @endif
                                        @endforeach
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white border-b border-gray-200 capitalize">
                                        <a href="/">✏</a>
                                        @if($user->id != Auth::user()->id)
                                            <form action="{{ route('api.users.destroy', [$user->id, 'api_token' => $user->api_token]) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit">
                                                    ❌
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>