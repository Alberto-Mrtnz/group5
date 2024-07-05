<x-layout>

<!-- barra verticla -->
    <div x-show="opened" class="pt-5 flex flex-col fixed w-96 h-screen top-14 left-0 justify-start items-center bg-gray-400 z-20">
        <div class="w-full ml-6">
        <button class="bg-gray-500 py-8 px-14 rounded-lg font-medium p-2 mt-2 font-montserrat text-2xl text-center">
            <p>Servivios habilitados</p>
        </button>
        </div>

        <div class="w-full ml-6">
        <button class="bg-gray-500 py-8 px-32 rounded-lg font-medium p-2  mt-4 font-montserrat text-2xl text-center">
            <p>Reseñas    </p>
        </button>
        </div>

        <div class="w-full ml-6">
        <button class="bg-gray-500 py-8 px-28 rounded-lg font-medium p-2  mt-4 font-montserrat text-2xl text-center">
            <p>Calendario</p>
        </button>

    </div>

    <div class="w-full ml-6">
    <button class="bg-gray-500 py-8 px-36 rounded-lg font-medium p-2  mt-4 font-montserrat text-2xl text-center">
        <p>Inicio</p>
    </button>
    </div>

    <div class="w-full py-5 px-2">
    <button>
    <svg class="grid justify-items-start size-10 hover:bg-gray-700 rounded-full" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
    </button>
    </div>
</div>
</nav>
</div>

<!-- servivio -->
<div x-data="{opened: false}">
    <button @click="opened = !opened" class="fixed w- full h-14 z-40 bg-gray-300 text-black font-bold py-1 px-1 hover:bg-gray-400 rounded-full inline-flex items-center">
        <svg class="size-12" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M320-600q-17 0-28.5-11.5T280-640q0-17 11.5-28.5T320-680h480q17 0 28.5 11.5T840-640q0 17-11.5 28.5T800-600H320Zm0 160q-17 0-28.5-11.5T280-480q0-17 11.5-28.5T320-520h480q17 0 28.5 11.5T840-480q0 17-11.5 28.5T800-440H320Zm0 160q-17 0-28.5-11.5T280-320q0-17 11.5-28.5T320-360h480q17 0 28.5 11.5T840-320q0 17-11.5 28.5T800-280H320ZM160-600q-17 0-28.5-11.5T120-640q0-17 11.5-28.5T160-680q17 0 28.5 11.5T200-640q0 17-11.5 28.5T160-600Zm0 160q-17 0-28.5-11.5T120-480q0-17 11.5-28.5T160-520q17 0 28.5 11.5T200-480q0 17-11.5 28.5T160-440Zm0 160q-17 0-28.5-11.5T120-320q0-17 11.5-28.5T160-360q17 0 28.5 11.5T200-320q0 17-11.5 28.5T160-280Z"/></svg>
    </button>

    <div x-show="opened" class="pt-20 flex flex-col fixed w-96 h-screen top-0 left-0 justify-start items-center bg-gray-300">
        <button class=" jusitfy-start items-center w-full  focus:outline-none  text-black rounded ">
            <svg class="text-black" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-320q48 0 85.5-28.5T620-422H340q17 45 54.5 73.5T480-320ZM380-480q25 0 42.5-17.5T440-540q0-25-17.5-42.5T380-600q-25 0-42.5 17.5T320-540q0 25 17.5 42.5T380-480Zm200 0q25 0 42.5-17.5T640-540q0-25-17.5-42.5T580-600q-25 0-42.5 17.5T520-540q0 25 17.5 42.5T580-480ZM305-704l112-145q12-16 28.5-23.5T480-880q18 0 34.5 7.5T543-849l112 145 170 57q26 8 41 29.5t15 47.5q0 12-3.5 24T866-523L756-367l4 164q1 35-23 59t-56 24q-2 0-22-3l-179-50-179 50q-5 2-11 2.5t-11 .5q-32 0-56-24t-23-59l4-165L95-523q-8-11-11.5-23T80-570q0-25 14.5-46.5T135-647l170-57Zm49 69-194 64 124 179-4 191 200-55 200 56-4-192 124-177-194-66-126-165-126 165Zm126 135Z"/></svg>
          <p class="text-base leading-4 ">Dashboard</p>
        </button>

        <button class="flex jusitfy-start items-center w-full  space-x-6 focus:outline-none text-white focus:text-indigo-400   rounded ">
            <svg class="fill-stroke" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M6 21V19C6 17.9391 6.42143 16.9217 7.17157 16.1716C7.92172 15.4214 8.93913 15 10 15H14C15.0609 15 16.0783 15.4214 16.8284 16.1716C17.5786 16.9217 18 17.9391 18 19V21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <p class="text-base leading-4 ">Users</p>
          </button>
          <button>
              <p>Servicios habilitados</p>
          </button>
          <x-button></x-button>
    </div>
</div>

<div id="ourServices" class="bg-gray-300 h-screen">
    <h1 class="font-montserrat font-semibold text-center text-2xl py-10">Nuestros servicios</h1>
    <swiper-container class="flex items-center justify-center mx-12 pb-10" pagination="true" effect="coverflow"
        grab-cursor="true" centered-slides="true" slides-per-view="auto" coverflow-effect-rotate="50"
        coverflow-effect-stretch="0" coverflow-effect-depth="100" coverflow-effect-modifier="1"
        coverflow-effect-slide-shadows="true" loop="true" navigation="true">
        <swiper-slide class="w-3/5 bg-center"><img class="mx-auto"
                src="{{ asset('img/Home.jpeg') }}"></swiper-slide>
        <swiper-slide class="w-3/5"><img class="mx-auto"
                src="{{ asset('img/salones-para-eventos.png') }}"></swiper-slide>
        <swiper-slide class="w-3/5"><img src="{{ asset('img/Home.jpeg') }}"></swiper-slide>
        <swiper-slide class="w-3/5"><img src="{{ asset('img/salones-para-eventos.png') }}"></swiper-slide>
        <swiper-slide class="w-3/5"><img src="{{ asset('img/Home.jpeg') }}"></swiper-slide>
        <swiper-slide class="w-3/5"><img src="{{ asset('img/salones-para-eventos.png') }}"></swiper-slide>
    </swiper-container>
</div>

</x-layout>
