<x-layout>
    <div>
        <div class="">
            <nav class="w-full bg-gray-300 grid-cols-2 py-0">
                <div class="inline-flex w-full">
                    <x-buttonicon2></x-buttonicon2>
                        <div class="py-2">
                            <img class="h-10 w-10 rounded-full" src="{{ asset('img/persona2.jpg') }}">
                        </div>
                        <h1 class="text-3xl font-moon flex-grow text-black py-2 px-2">EVYS</h1>
                        <div class="py-2 px-3">
                            <img class=" justify-end h-10 w-10 rounded-full" src="{{ asset('img/persona2.jpg') }}">
                        </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="grid grid-cols-2">
        <div class="col-span-1">
            <img src="{{ asset('img/VENIU.jpg') }}" class="w-full p-4 rounded-md">
        </div>
        <div class="col-span-1">
            <input class="mt-4 rounded-lg h-16 w-11/12"/>
        </div>
    </div>
    <div class="bg-gray-300 h-screen">
        <swiper-container class="flex items-center justify-center mx-12 pb-10" pagination="true" effect="coverflow"
            grab-cursor="true" centered-slides="true" slides-per-view="auto" coverflow-effect-rotate="50"
            coverflow-effect-stretch="0" coverflow-effect-depth="100" coverflow-effect-modifier="1"
            coverflow-effect-slide-shadows="true" loop="true" navigation="true">
            <swiper-slide class="w-3/5"><img src="{{ asset('img/salones-para-eventos.png') }}"></swiper-slide>
          </swiper-container>
          <swiper-slide class="w-3/5 bg-center"><img class="mx-auto"
            src="{{ asset('img/Home.jpeg') }}"></swiper-slide>

          <swiper-slide class="w-3/5"><img src="{{ asset('img/Home.jpeg') }}"></swiper-slide>
          <swiper-slide class="w-3/5"><img src="{{ asset('img/salones-para-eventos.png') }}"></swiper-slide>
          <swiper-slide class="w-3/5"><img src="{{ asset('img/Home.jpeg') }}"></swiper-slide>
    </div>

    
</x-layout>
