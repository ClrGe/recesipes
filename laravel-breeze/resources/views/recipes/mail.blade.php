<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Envoyer cette recette') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="details">
                        <div class="container flex flex-wrap mx-auto">

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="page">
                                <form action="{{route('recipes.send', $recipe)}}" method="POST">
                                    @csrf

                                        <!-- Email Address -->
                                        <div class="w-full">
                                            <x-label for="email" :value="__('Email du destinataire')" />

                                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                                     :value="old('email')" required autofocus />
                                        </div>
                                        <div class="flex justify-center w-full">
                                            <div class="mb-3 w-full">
                                                <label for="FormControlTextarea"
                                                       class="form-label inline-block mb-2 text-gray-700">Message que vous souhaitez envoyer</label>
                                                <textarea
                                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                    id="FormControlTextarea" rows="10" name="message"></textarea>
                                            </div>
                                        </div>

                                    <button class="bg-blue-400 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded inline-flex items-center" type="submit">
                                        <svg class="h-6 w-6 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="3" y="5" width="18" height="14" rx="2" />  <polyline points="3 7 12 13 21 7" /></svg>
                                        <span>Envoyer</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
