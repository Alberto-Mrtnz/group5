<x-layout>
    <!-- Barra -->
    <x-barra></x-barra>

    <!-- servivio -->

    <div class="grid grid-cols-2 m-4 shadow-lg py-6 rounded-lg bg-white gap-4 relative">
        <div class="mt-10">
            <swiper-container class="flex items-center justify-center mx-20 w-9/12" effect="cards" grab-cursor="true"
                pagination="true" grab-cursor="true" centered-slides="true" loop="true">
                <swiper-slide class="bg-center">
                    <img class="mx-auto w-full rounded-lg" src="{{ asset('img/Home.jpeg') }}">
                    </swiper-slide>
                <swiper-slide class=" bg-center">
                    <img class="mx-auto w-full rounded-lg" src="{{ asset('img/salones-para-eventos.png') }}">
                </swiper-slide>
                <swiper-slide class="bg-center">
                    <img class="mx-auto w-full rounded-lg" src="{{ asset('img/Home.jpeg') }}">
                </swiper-slide>
                <swiper-slide class=" bg-center">
                    <img class="mx-auto w-full rounded-lg" src="{{ asset('img/salones-para-eventos.png') }}">
                </swiper-slide>
            </swiper-container>
            <div class="m-4 mt-20 bg-slate-300 rounded-lg p-8">
                <h1 class="font-semibold" >ADDRESS</h1>
                <p>{{ $supply->address }}</p>
            </div>
        </div>

        <div class="rounded-lg w-full pr-9">
                <div class="mb-4 mt-7 bg-slate-300 rounded-lg p-8">
                    <h1 class="mt- ml-6 text-2xl">{{ $supply->user->name }}</h1>
                </div>
                <div class="m bg-slate-300 rounded-lg m-0.5 p-20">
                    <div class="mb-3">
                        <p class="font-bold mb-3">{{ $supply->name }}</p>
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
