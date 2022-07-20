<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">
            {{ $recipe->name }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Detail recette
                </div>

                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <div class="flex-1">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                {{ $recipe->name }}
                            </h3>


                            <p class="mt-1 text-base leading-6 text-gray-500">
                                {{ $recipe->description }}
                            </p>

                            <img src=" {{ $recipe->image }} " alt="">
                        </div>

                        <div class="flex-1">
                            <span> {{ $recipe->guest_number }} </span>

{{--                            <span> {{ $recipe->steps }} </span>--}}

                            <span> {{ $recipe->price_range }} </span>

                            <span> {{ $recipe->difficulty }} </span>
                        </div>

                        <div class="flex-1">
                            {{ $recipe->preparation_duration }}
                            {{ $recipe->resting_duration }}
                            {{ $recipe->cook_duration }}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
