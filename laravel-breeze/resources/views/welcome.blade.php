<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accueil') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="title h-32 grid place-items-center font-black">
                        Suggestions du moment
                    </div>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="object-cover w-full h-80"
                                     src="https://cdn.pixabay.com/photo/2017/05/07/08/56/pancakes-2291908__480.jpg"
                                     alt="pancakes raspberries syrup" />
                            </div>
                            <div class="swiper-slide">
                                <img class="object-cover w-full h-80"
                                     src="https://cdn.pixabay.com/photo/2017/09/28/18/13/bread-2796393_1280.jpg"
                                     alt="eggs ham salad" />
                            </div>
                            <div class="swiper-slide">
                                <img class="object-cover w-full h-80"
                                     src="https://cdn.pixabay.com/photo/2016/10/13/11/44/chocolates-1737503_1280.jpg"
                                     alt="chocolat photo" />
                            </div>
                            <div class="swiper-slide">
                                <img class="object-cover w-full h-80"
                                     src="https://cdn.pixabay.com/photo/2017/03/17/17/33/potato-soup-2152254_1280.jpg"
                                     alt="pancakes raspberries syrup" />
                            </div>
                            <div class="swiper-slide">
                                <img class="object-cover w-full h-80"
                                     src="https://cdn.pixabay.com/photo/2020/05/28/18/51/eat-5232255_1280.jpg"
                                     alt="eggs ham salad" />
                            </div>
                            <div class="swiper-slide">
                                <img class="object-cover w-full h-80"
                                     src="https://cdn.pixabay.com/photo/2017/01/13/03/02/burgers-1976198_1280.jpg"
                                     alt="chocolat photo" />
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="title grid h-32 place-items-center">
                        Découvrez de nouveaux horizons culinaires
                    </div>
                    <div class="container flex flex-wrap mx-auto">
                        @foreach ($recipes as $recipe)
                            <div class="w-full p-2 rounded lg:w-1/3 md:w-1/2">
                                <a href="/recipes/{{ $recipe->id }}">
                                    @if($recipe->image == null)
                                        <img class="w-full" src="https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="">
                                    @else
                                        <img class="w-full" src="{{ $recipe->image }}" alt="">
                                    @endif
                                        <div
                                            class="font-semibold text-xl text-gray-800 leading-tight h-10 capitalize">
                                            {{ $recipe->name }}
                                        </div>
                                    <div>
                                        <b>Temps de préparation :</b>
                                        {{ $recipe->preparation_duration }}
                                    </div>
                                    <div>
                                        <b>Temps de cuisson :</b>
                                        {{ $recipe->cook_duration }}
                                    </div>
                                    <div>
                                        <b>Coût :</b>
                                        {{ $recipe->price_range }}
                                    </div>
                                    <div>
                                        <b>Difficulté :</b>
                                        {{ $recipe->difficulty }}
                                    </div>
                                    <div>
                                        <b>Description : </b>
                                        {{ $recipe->description }}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <script>
                        var swiper = new Swiper('.mySwiper', {
                            spaceBetween: 80,
                            centeredSlides: true,
                            autoplay: {
                                delay: 3000,
                                disableOnInteraction: false,
                            },
                            pagination: {
                                el: '.swiper-pagination',
                                clickable: true,
                            },
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                            },
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
