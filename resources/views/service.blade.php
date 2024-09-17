<x-layout>
    <!-- Barra -->
    <x-barra></x-barra>

    <!-- servicio -->

    <div class="shadow-lg">
        <div class="relative grid grid-cols-2 gap-4 py-6 m-4 bg-white rounded-lg">
            <div class="mt-10">
                <swiper-container class="flex items-center justify-center w-9/12 mx-20" effect="cards" grab-cursor="true"
                    pagination="true" grab-cursor="true" centered-slides="true" loop="true">
                    <swiper-slide class="bg-center">
                        <img class="w-full mx-auto rounded-lg" src="{{ asset("img/supplies/$supply->id/$supply->id.1.jpeg") }}">
                    </swiper-slide>
                    <swiper-slide class="bg-center ">
                        <img class="w-full h-80 mx-auto rounded-lg" src="{{ asset("img/supplies/$supply->id/$supply->id.2.jpeg") }}">
                    </swiper-slide>
                    <swiper-slide class="bg-center">
                        <img class="w-full h-80 mx-auto rounded-lg" src="{{ asset("img/supplies/$supply->id/$supply->id.3.jpeg") }}">
                    </swiper-slide>
                    <swiper-slide class="bg-center ">
                        <img class="w-full h-80 mx-auto rounded-lg" src="{{ asset("img/supplies/$supply->id/$supply->id.4.jpeg") }}">
                    </swiper-slide>
                </swiper-container>

                <div class="my-6 ml-12">
                    <div x-data="{
                        rating: 0,
                        hoverRating: 0,
                        ratings: 5,
                        rate(amount) {
                            if (this.rating == amount) {
                                this.rating = 0;
                            } else this.rating = amount;
                        }
                    }"
                        class="">
                        <div class="flex space-x-0">
                            <template x-for="star in ratings" :key="star">
                                <button @click="rate(star)" @mouseover="hoverRating = star"
                                    @mouseleave="hoverRating = rating" aria-hidden="true" :title="star"
                                    class="rounded-sm text-gray-400 fill-current focus:outline-none focus:shadow-outline p-1 w-12 m-0 cursor-pointer"

                                    :class="{ 'text-gray-600': hoverRating >= star,
                                    'text-yellow-400': rating >= star &&
                                            hoverRating >= star }">

                                    <svg class="w-15 transition duration-150" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </button>
                            </template>
                        </div>
                    </div>
                </div>

                <div class="p-8 m-4 mt- rounded-lg bg-eventi-gris">
                    <h1 class="font-main text-lg font-semibold">ADDRESS</h1>
                    <p class="font-didone text-lg">{{ $supply->address }}</p>
                </div>
            </div>

            <div class="w-full rounded-lg pr-9">
                <div class="p-8 mb-4 rounded-lg mt-7 bg-eventi-gris">
                    <a href='{{ route('provider', $supply->user->id) }}'
                        class="ml-6 text-3xl font-main">{{ $supply->user->name }}</a>
                </div>
                <div class="bg-eventi-gris rounded-lg m-0.5 p-20">
                    <div class="mb-3">
                        <p class="mb-3 font-main text-xl font-bold">{{ $supply->name }}</p>
                        <h1 class="font-main text-lg font-semibold">DESCRIPTION</h1>
                        <p class="font-didone text-lg">{{ $supply->description }}</p>
                    </div>
                </div>
                <div class="bg-eventi-gris rounded-lg m-0.5 p-12 mt-4">
                    <p>
                    <h1 class="font-main text-lg font-semibold">EXPERIENCE</h1>
                    <p class="font-didone text-lg">{{ $supply->experience }}</p>
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 mx-4">
            <div class="col-span-1 bg-eventi-gris p-2">
                <h1 class="py-1.5 ml-2 font-main">JUAN PABLO ll</h1>
                <div class="flex space-x-2 font-didone">
                    <img class="w-10 h-10 rounded-full mr-4" src="{{ asset('img/icon.png') }}">
                        @foreach( $supply->ratings as $rating )
                            {{ $rating->comment }}
                        @endforeach
                </div>
                <div class="">
                    <div x-data="{
                        rating: 0,
                        hoverRating: 0,
                        ratings: 5,
                        rate(amount) {
                            if (this.rating == amount) {
                                this.rating = 0;
                            } else this.rating = amount;
                        }
                    }"
                        class="">
                        <div class="flex space-x-0">
                            <template x-for="star in ratings" :key="star">
                                <button @click="rate(star)" @mouseover="hoverRating = star"
                                    @mouseleave="hoverRating = rating" aria-hidden="true" :title="star"
                                    class="rounded-sm text-gray-400 fill-current focus:outline-none focus:shadow-outline p-1 w-12 m-0 cursor-pointer"

                                    :class="{ 'text-gray-600': hoverRating >= star,
                                    'text-yellow-400': rating >= star &&
                                            hoverRating >= star }">

                                    <svg class="w-15 transition duration-150" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </button>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
