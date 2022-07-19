<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
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
                                Titre
                            </div>
                        </td>
                        <td>
                            <div class="p-6 bg-white border-b border-gray-200 capitalize">
                                Permissions
                            </div>
                        </td>
                        <td>
                            <div class="p-6 bg-white border-b border-gray-200 capitalize">
                                Gestion
                            </div>
                        </td>
                    </tr>
                    @foreach ($roles as $role)
                        <tr>
                                <td>
                                    <div class="p-6 bg-white border-b border-gray-200 capitalize">
                                        {{ $role->id }}
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white border-b border-gray-200 capitalize">
                                        {{ $role->title }}
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white border-b border-gray-200 capitalize">
                                        @foreach($permissions as $permission)
                                            @if($role->permissions_id == $permission->id)
                                               <ul class="permList">
                                                    <li>
                                                        <div class="permDiv">
                                                            <b>Review</b>
                                                            <input type="checkbox" {{$permission->review ? 'checked' : ''}} {{$role->title == "Administrator" ? 'disabled' : ''}} />
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="permDiv">
                                                            <b>SelfEdit</b>
                                                            <input type="checkbox" {{$permission->self_editing ? 'checked' : ''}} {{$role->title == "Administrator" ? 'disabled' : ''}} />
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="permDiv">
                                                            <b>All</b>
                                                            <input type="checkbox" {{$permission->all ? 'checked' : ''}} {{$role->title == "Administrator" ? 'disabled' : ''}} />
                                                        </div>
                                                    </li>
                                               </ul>     
                                            @endif
                                        @endforeach
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white border-b border-gray-200 capitalize">
                                            <form action="{{ route('api.roles.destroy', [$role->id, 'api_token' => Auth::user()->api_token]) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit">
                                                    ❌
                                                </button>
                                            </form>
                                        
                                    </div>
                                </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .permDiv{
       display: flex;
       justify-content: space-between; 
       width: 30%;
       margin-left: 35%;
    }

    .permList{
        margin: -20px 0 -15px 0;
    }

    input[type="checkbox"]:disabled {
        color: #ccc;
    }

</style>