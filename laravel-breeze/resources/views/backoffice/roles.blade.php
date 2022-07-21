<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ route('backoffice.index') }}">⬅</a> {{ __('Roles') }}
        </h2>
    </x-slot>
    <div class="py-12" style="background-color: #22577A;">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table>
                    <tr style="font-size: 150%;" class="border-b border-gray-200">
                        <td>
                            <div class="p-6 bg-white capitalize">
                                ID
                            </div>
                        </td>
                        <td>
                            <div class="p-6 bg-white capitalize">
                                Titre
                            </div>
                        </td>
                        <td>
                            <div class="p-6 bg-white capitalize">
                                Permissions
                            </div>
                        </td>
                        <td>
                            <div class="p-6 bg-white capitalize">
                                Gestion
                            </div>
                        </td>
                    </tr>
                    @foreach ($roles as $role)
                        <tr class="border-b border-gray-200">
                                <td>
                                    <div class="p-6 bg-white capitalize">
                                        {{ $role->id }}
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white capitalize">
                                        {{ $role->title }}
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white capitalize">
                                        <form id="{{'permForm'.$role->id}}" method="POST" action="{{ route('backoffice.saveperm') }}" enctype="multipart/form-data">
                                            @csrf
                                            @foreach($permissions as $permission)
                                                @if($role->permissions_id == $permission->id)
                                                <ul class="permList">
                                                        <li>
                                                            <div class="permDiv">
                                                                <b>Review</b>
                                                                @if($role->title == "Administrator")
                                                                    {{ Form::checkbox('permission'.$permission->id.'[]', 'review', $permission->review, array('disabled') )}}
                                                                @else
                                                                    {{ Form::checkbox('permission'.$permission->id.'[]', 'review', $permission->review)}}
                                                                @endif
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="permDiv">
                                                                <b>SelfEdit</b>
                                                                @if($role->title == "Administrator")
                                                                {{ Form::checkbox('permission'.$permission->id.'[]', 'selfEdit', $permission->self_editing, array('disabled') )}}
                                                                @else
                                                                {{ Form::checkbox('permission'.$permission->id.'[]', 'selfEdit', $permission->self_editing) }}
                                                                @endif
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="permDiv">
                                                                <b>All</b>
                                                                @if($role->title == "Administrator")
                                                                {{ Form::checkbox('permission'.$permission->id.'[]', 'all', $permission->all, array('disabled') )}}
                                                                @else
                                                                {{ Form::checkbox('permission'.$permission->id.'[]', 'all', $permission->all) }}
                                                                @endif
                                                            </div>
                                                        </li>
                                                </ul>
                                                <input type="hidden" value="{{ $permission->id }}" name="permID"/>     
                                                @endif
                                            @endforeach
                                        </form>
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white capitalize">
                                            <button type="submit" form="{{'permForm'.$role->id}}">
                                                ✔ Valider
                                            </button>
                                            <form action="{{ route('api.roles.destroy', [$role->id, 'api_token' => Auth::user()->api_token]) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit">
                                                    ❌ Supprimer
                                                </button>
                                            </form>
                                        
                                    </div>
                                </td>
                        </tr>
                    @endforeach
                    <tr class="border-b border-gray-200">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="p-6 bg-white capitalize">                                
                                <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" href="{{ route('backoffice.roles') }}">
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

    table{
        text-align: center ;
        width:100%;
    }

</style>