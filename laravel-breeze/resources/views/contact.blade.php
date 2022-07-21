<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="page">
                        <form action="{{route('contact.form')}}" method="POST">
                            @csrf
                            <div class="container">

                            <!-- Email Address -->
                            <div>
                                <x-label for="email" :value="__('Email')" />

                                <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autofocus />
                            </div>

                            <!-- Sujet -->
                            <div>
                                <x-label for="sujet" :value="__('Sujet')" />

                                <x-input id="sujet" class="block mt-1 w-full" type="text" name="sujet"
                                    :value="old('sujet')" required autofocus />
                            </div>

                            <div class="flex justify-center">
                                <div class="mb-3 w-full">
                                    <label for="exampleFormControlTextarea1"
                                        class="form-label inline-block mb-2 text-gray-700">Message</label>
                                    <textarea
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        id="exampleFormControlTextarea1" rows="10" name="message"></textarea>
                                </div>
                            </div>
                            <div class="flex p-1">
                                <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400"
                                    required>Envoyer</button>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
</x-app-layout>
