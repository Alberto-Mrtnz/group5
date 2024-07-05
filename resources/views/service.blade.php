<x-layout>
    <!-- Barra -->
                <x-barra></x-barra>

    <!-- servivio -->

    <div class="grid grid-cols-2 m-4 shadow-lg rounded-lg bg-white justify-self-end">
        <div class="h-screen mt-7">
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
            <div class="m-4 bg-slate-300 rounded-lg ">
                <p>{{ $supply->address }}</p>
            </div>
        </div>

        <div class="col-span-1 rounded-lg size-96">
                <div class="m-4 bg-slate-300 rounded-lg mx-4 p-10">
                    <h1 class="mt- ml-6">{{ $supply->name }}</h1>
                </div>
                <div class="m bg-slate-300 rounded-lg m-0.5 mx-4 p-20">
                    <div class="mb-2">
                    <p>{{ $supply->description }}</p>
                    </div>
                    <p>{{ $supply->experience }}
                    </p>
                </div>
        </div>
    </div>

</x-layout>
