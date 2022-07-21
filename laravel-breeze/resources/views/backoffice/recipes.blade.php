<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ route('backoffice.index') }}">⬅</a> {{ __('Recettes') }}
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
                                Categorie
                            </div>
                        </td>
                        <td>
                            <div class="p-6 bg-white capitalize">
                                Ingredients
                            </div>
                        </td>
                        <td>
                            <div class="p-6 bg-white capitalize">
                                Participants
                            </div>
                        </td>
                        <td>
                            <div class="p-6 bg-white capitalize">
                                Gestion
                            </div>
                        </td>
                    </tr>
                    @foreach ($recipes as $recipe)
                        <tr class="border-b border-gray-200">
                                <td>
                                    <div class="p-6 bg-white capitalize">
                                        {{ $recipe->id }}
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white capitalize">
                                        {{ $recipe->name }}
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white capitalize">
                                        @foreach($categories as $category)
                                            @if($category->id == $recipe->category_id)
                                                @if($category->subtype2 == null)
                                                    @if($category->subtype1 == null)
                                                        {{ $category->type }}
                                                    @else
                                                        {{ $category->subtype1 }}
                                                    @endif
                                                @else
                                                    {{ $category->subtype2 }}
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white capitalize">                            
                                        {{ count($quantities->where("recipe_id", $recipe->id)) }} Ingredients       
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white capitalize">
                                        {{ $recipe->guest_number }}
                                    </div>
                                </td>
                                <td>
                                    <div class="p-6 bg-white capitalize">
                                            <form action="{{ route('api.recipes.destroy', [$recipe->id, 'api_token' => Auth::user()->api_token]) }}" method="POST">
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
</style>