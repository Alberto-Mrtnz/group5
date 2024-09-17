<x-layout>
    <!-- Barra -->
    <x-barra/>

    <!-- Servicio -->
    <div class="mb-12 overflow-x-hidden">
        <h1 class="mx-6 font-didone font-bold text-2xl mt-12 mb-6 text-center">Service details</h1>
        <div class="relative grid grid-cols-2 gap-3 mx-6 bg-white rounded-lg">
            <div>
                <div class="flex items-center justify-center w-7/12 mx-auto">
                    <swiper-container class="w-full" effect="cards" grab-cursor="true"
                        pagination="true" grab-cursor="true" centered-slides="true" loop="true">
                        <swiper-slide class="my-auto">
                            <img class="w-full rounded-xl" src="{{ asset("img/supplies/$supply->id/$supply->id.1.jpeg") }}">
                        </swiper-slide>
                        <swiper-slide class="my-auto">
                            <img class="w-full rounded-xl" src="{{ asset("img/supplies/$supply->id/$supply->id.2.jpeg") }}">
                        </swiper-slide>
                        <swiper-slide class="my-auto">
                            <img class="w-full rounded-xl" src="{{ asset("img/supplies/$supply->id/$supply->id.3.jpeg") }}">
                        </swiper-slide>
                        <swiper-slide class="my-auto">
                            <img class="w-full rounded-xl" src="{{ asset("img/supplies/$supply->id/$supply->id.4.jpeg") }}">
                        </swiper-slide>
                    </swiper-container>
                </div>

                <div class="px-8 py-5 my-4 rounded-lg bg-[#e5e7eb]">
                    <h1 class="font-didone font-bold text-lg">Address</h1>
                    <p class="mx-6">{{ $supply->address }}</p>
                </div>
            </div>

            <div class="w-full rounded-lg">
                <div class="px-8 py-5 rounded-lg bg-[#e5e7eb]">
                    <p class="mb-2 text-xl font-bold">{{ $supply->name }}</p>
                    <h1 class="font-didone font-bold text-lg">Description</h1>
                    <p class="mx-6">{{ $supply->description }}</p>
                </div>

                <div class="px-8 py-5 my-4 rounded-lg bg-[#e5e7eb]">
                    <a href='{{ route('provider', $supply->user->id) }}'>
                        <h1 class="font-didone font-bold text-lg">Provider information</h1>
                        <p class="mx-6">{{ $supply->user->name }}</p>
                        <p class="mx-6">{{ $supply->user->email }}</p>
                        <p class="mx-6">{{ $supply->user->phone }}</p>
                    </a>
                </div>

                <div class="px-8 py-5 my-4 rounded-lg bg-[#e5e7eb]">
                    <h1 class="font-didone font-bold text-lg">Experience</h1>
                    <p class="mx-6">{{ $supply->experience }}</p>
                </div>
            </div>
        </div>

        <h1 class="mx-6 font-didone font-bold text-xl my-3">Reviews</h1>

        @if(count($ratings) == 0)
            <div class="bg-[#e5e7eb] mx-6 p-2 rounded-2xl">
                <p class="px-3 py-2">There are no reviews available.</p>
            </div>
        @else
            @foreach($ratings as $rating)
                <div class="bg-[#e5e7eb] mx-6 p-2 rounded-2xl my-2">
                    <div class="flex space-x-2">
                        <img class="w-10 h-10 rounded-full" src="{{ asset('img/icon.png') }}">
                        <h1 class="py-1.5 font-bold">{{$rating->user->name}}</h1>
                    </div>

                    <h1 class="py-1.5 px-8">{{$rating->comment}}</h1>

                    <div x-data="{rating: {{ $rating->stars }}, ratings: 5}">
                        <div class="flex space-x-0">
                            <template x-for="star in ratings" :key="star">
                                <button @click="rate(star)" aria-hidden="true" :title="star"
                                        class="rounded-sm text-gray-400 fill-current focus:outline-none focus:shadow-outline p-1 w-12 m-0 cursor-pointer"
                                        :class="{ 'text-yellow-400': rating >= star }">

                                    <svg class="w-15 transition duration-150" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </button>
                            </template>
                        </div>
                    </div>

                    <p class="text-xs text-gray-600 text-end">{{ $rating->created_at }}</p>
                </div>
            @endforeach
        @endif

        <h1 class="mx-6 font-didone font-bold text-xl mt-8 mb-3">Add a new review</h1>

        <form action="{{ route('review.create') }}" method="POST" class="mx-6">
            @csrf

            <div class="my-6">
                <div x-data="{
                        rating: 0, hoverRating: 0, ratings: 5,
                        rate(amount) {
                            if (this.rating == amount) {
                                this.rating = 0;
                            } else this.rating = amount;
                        }
                    }">
                    <label for="" class="block mb-2 font-medium">Rate</label>
                    <div class="flex space-x-0">
                        <template x-for="star in ratings" :key="star">
                            <button @click="rate(star)" @mouseover="hoverRating = star"
                                    @mouseleave="hoverRating = rating" aria-hidden="true" :title="star" type="button"
                                    class="rounded-sm text-gray-400 fill-current focus:outline-none focus:shadow-outline p-1 w-12 m-0 cursor-pointer"

                                    :class="{ 'text-gray-600': hoverRating >= star,
                                    'text-yellow-400': rating >= star &&
                                            hoverRating >= star }">
                                <input class="hidden" x-model="rating" name="stars">
                                <input class="hidden" value="{{ $supply->id }}" name="supply_id">

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

            <label for="" class="block mb-2 font-medium">Comment</label>
            <textarea class="box-content h-6 px-1 py-3 italic bg-gray-200 rounded-lg w-full" name="comment" placeholder="Enter your information"></textarea>

            <div class="pb-12">
                <x-buttom type="submit">Add review</x-buttom>
            </div>
        </form>
    </div>
</x-layout>
