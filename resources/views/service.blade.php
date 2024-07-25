<x-layout>
    <!-- Barra -->
    <x-barra></x-barra>

    <!-- servicio -->

    <div class="relative grid grid-cols-2 gap-4 py-6 m-4 bg-white rounded-lg shadow-lg">
        <div class="mt-10">
            <swiper-container class="flex items-center justify-center w-9/12 mx-20" effect="cards" grab-cursor="true"
                pagination="true" grab-cursor="true" centered-slides="true" loop="true">
                <swiper-slide class="bg-center">
                    <img class="w-full mx-auto rounded-lg" src="{{ asset('img/Home.jpeg') }}">
                    </swiper-slide>
                <swiper-slide class="bg-center ">
                    <img class="w-full mx-auto rounded-lg" src="{{ asset('img/salones-para-eventos.png') }}">
                </swiper-slide>
                <swiper-slide class="bg-center">
                    <img class="w-full mx-auto rounded-lg" src="{{ asset('img/Home.jpeg') }}">
                </swiper-slide>
                <swiper-slide class="bg-center ">
                    <img class="w-full mx-auto rounded-lg" src="{{ asset('img/salones-para-eventos.png') }}">
                </swiper-slide>
            </swiper-container>
            <div class="p-8 m-4 mt-20 rounded-lg bg-slate-300">
                <h1 class="font-semibold" >ADDRESS</h1>
                <p>{{ $supply->address }}</p>
            </div>
        </div>

        <div class="w-full rounded-lg pr-9">
                <div class="p-8 mb-4 rounded-lg mt-7 bg-slate-300">
                    <a href='{{ route('provider', $supply->user->id) }}' class="ml-6 text-2xl mt-">{{ $supply->user->name }}</a>
                </div>
                <div class="m bg-slate-300 rounded-lg m-0.5 p-20">
                    <div class="mb-3">
                        <p class="mb-3 font-bold">{{ $supply->name }}</p>
                        <h1 class="font-semibold">DESCRIPCTION</h1>
                    <p>{{ $supply->description }}</p>
                    </div>
                </div>
                <div class="m bg-slate-300 rounded-lg m-0.5 p-12 mt-4">
                    <p>
                        <h1 class="font-semibold">EXPERIENCE</h1>
                        {{ $supply->experience }}
                    </p>
                    </div>
        </div>
    </div>

</x-layout>
