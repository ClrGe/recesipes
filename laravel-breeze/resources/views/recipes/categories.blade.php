<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catégories') }}
        </h2>
    </x-slot>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @foreach ($categories as $category)
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="é"><div class="p-6 bg-white border-b border-gray-200">
                ➡️ {{ $category->name }}
                </div></a>
            </div>
            @endforeach

        </div>
    </div>
</x-app-layout>
