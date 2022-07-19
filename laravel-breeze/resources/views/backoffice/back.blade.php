<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('BackOffice') }}
        </h2>
    </x-slot>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('backoffice.users') }}">
                <div class="p-6 bg-white border-b border-gray-200 capitalize">
                    ➡️ Utilisateurs
                </div>
            </a>
            <a href="{{ route('backoffice.roles') }}">
                <div class="p-6 bg-white border-b border-gray-200 capitalize">
                    ➡️ Roles
                </div>
            </a>
            <a href="{{ route('backoffice.recipes') }}">
                <div class="p-6 bg-white border-b border-gray-200 capitalize">
                    ➡️ Recettes
                </div>
            </a>
        </div>
    </div>
</x-app-layout>
