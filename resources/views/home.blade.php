<x-layout>
    <div class="relative">
        <!-- barra -->
        <div x-data="{ opened: false }" >
            <nav class="z-20 w-full grid-cols-2 py-0 text-black bg-fika-pink ">
                <div class="inline-flex w-full">
                    <x-buttonicon2></x-buttonicon2>
                        <div class="z-30 py-2 pl-14">
                            <img class="w-10 h-10 rounded-full" src="{{ asset('img/persona2.jpg') }}">
                        </div>
                        <h1 class="z-30 flex-grow px-2 py-2 text-3xl text-black font-moon">FIKA</h1>
                        <div class="px-3 py-2">
                            <img class="justify-end w-10 h-10 rounded-full " src="{{ asset('img/persona2.jpg') }}">
                        </div>
<!-- barra verticla -->
<div x-show="opened" class="fixed left-0 z-20 flex flex-col items-center justify-start h-screen pt-5 bg-white w-96 top-14">
    <div class="w-full ml-6">
        <button class="p-2 py-8 mt-2 text-2xl font-medium text-center text-white rounded-lg bg-fika-black px-14 font-montserrat">
            <a href="/service"><p>Servivios habilitados</p> </a>
         </button>
    </div>

    <div class="w-full ml-6">
         <button class="p-2 px-32 py-8 mt-4 text-2xl font-medium text-center text-white rounded-lg bg-fika-black font-montserrat">
        <p>Reseñas    </p>
         </button>
     </div>

    <div class="w-full ml-6">
        <button class="p-2 py-8 mt-4 text-2xl font-medium text-center text-white rounded-lg bg-fika-black px-28 font-montserrat">
        <p>Calendario</p>
        </button>

    </div>

    <div class="w-full ml-6">
        <button class="p-2 py-8 mt-4 text-2xl font-medium text-center text-white rounded-lg bg-fika-black px-36 font-montserrat">
            <a href="/home"><p>Inicio</p></a>
        </button>
    </div>

    <div class="w-full px-2 py-5">
        <button>
        <svg class="grid rounded-full justify-items-start size-10 hover:bg-fika-brown" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
        </button>
    </div>
</div>
</nav>
        <!-- buscador -->

        <label class="block px-20 pt-5 ">
            <span class="sr-only">Search</span>
            <span class="absolute inset-y-0 left-0 flex items-center">
                <svg class="w-5 h-5 fill-slate-300" viewBox="0 0 20 20"></svg>
            </span>
            <div class="inline-flex w-full grid-cols-2">
                <input
                    class="justify-end block w-full col-span-1 py-2 bg-white border rounded-full shadow-sm placeholder:text-slate-400 font-montserrat border-slate-300 pl-9 focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
                    placeholder="Search..." type="text" name="search" />
                <button type="submit"
                    class="p-2.5 ms-2 text-sm font-medium text-white shadow-sm bg-white rounded-full border border-slate-300 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#5f6368">
                        <path
                            d="M375.48-307q-114.09 0-193.55-79.46-79.45-79.45-79.45-193.54 0-114.09 79.45-193.54Q261.39-853 375.48-853q114.09 0 193.54 79.46 79.46 79.45 79.46 193.54 0 45.13-12.87 83.28T601-429.7l219.48 220.05q14.96 15.52 14.96 37.32 0 21.81-15.53 36.77-14.95 14.95-37.04 14.95t-37.04-14.95L526.91-354.48q-29.43 21.74-68.15 34.61Q420.04-307 375.48-307Zm0-106q69.91 0 118.45-48.54 48.55-48.55 48.55-118.46t-48.55-118.46Q445.39-747 375.48-747t-118.46 48.54Q208.48-649.91 208.48-580t48.54 118.46Q305.57-413 375.48-413Z" />
                    </svg>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" /></span>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </label>

        <!-- categorias -->

        @foreach ($categories as $category)
            <x-buttonicon>{{ $category->name }}</x-buttonicon>
        @endforeach

        <!-- tarjeta -->

        <div class="grid grid-cols-3 mb-12">
            @foreach ($supplies as $supply)
                <x-event id="{{ $supply->id }}" title="{{ $supply->name }}" description="{{ $supply->description }}" />
            @endforeach
        </div>
    </div>
</x-layout>
