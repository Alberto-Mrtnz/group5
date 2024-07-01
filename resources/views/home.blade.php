<x-layout>
    <div class="relative">
        <!-- barra -->
        <div x-data="{opened: false}" >
            <nav class="w-full bg-gray-300 grid-cols-2 py-0 z-20">
                <div class="inline-flex w-full">
                    <x-buttonicon2></x-buttonicon2>
                        <div class="py-2 pl-14 z-30">
                            <img class="h-10 w-10 rounded-full" src="{{ asset('img/persona2.jpg') }}">
                        </div>
                        <h1 class="text-3xl font-moon flex-grow text-black py-2 px-2 z-30">FIKA</h1>
                        <div class="py-2 px-3">
                            <img class=" justify-end h-10 w-10 rounded-full" src="{{ asset('img/persona2.jpg') }}">
                        </div>
<!-- barra verticla -->
                        <div x-show="opened" class="pt-20 flex flex-col fixed w-96 h-screen top-0 left-0 justify-start items-center bg-gray-300 z-20">
                            <button class="bg-gray-500 py-8 mx-20 rounded-lg font-medium mt-2 font-montserrat text-2xl text-center">
                                <p>hola</p>
                            </button>
                            <button class="bg-gray-500 py-8 px-12 rounded-lg font-medium p-2  mt-4 font-montserrat text-2xl text-center">
                                <p>Reseñas</p>
                            </button>
                            <button class="bg-gray-500 py-8  rounded-lg font-medium p-2  mt-4 font-montserrat text-2xl text-center">
                                <p>Calendario</p>
                            </button>
                            <button class="bg-gray-500 py-8 px-12 rounded-lg font-medium p-2  mt-4 font-montserrat text-2xl text-center">
                                <p>Inicio</p>
                            </button>
                </div>
            </nav>
        </div>


        <!-- buscador -->

        <label class=" block px-20 pt-5">
            <span class="sr-only">Search</span>
                <span class="absolute inset-y-0 left-0 flex items-center">
                    <svg class="h-5 w-5 fill-slate-300" viewBox="0 0 20 20"></svg>
                </span>
            <div class="inline-flex grid-cols-2 w-full">
                <input class="placeholder:text-slate-400 font-montserrat block col-span-1 justify-end bg-white w-full border border-slate-300 rounded-full py-2 pl-9 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search..." type="text" name="search"/>
                <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white shadow-sm bg-white rounded-full border border-slate-300 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M375.48-307q-114.09 0-193.55-79.46-79.45-79.45-79.45-193.54 0-114.09 79.45-193.54Q261.39-853 375.48-853q114.09 0 193.54 79.46 79.46 79.45 79.46 193.54 0 45.13-12.87 83.28T601-429.7l219.48 220.05q14.96 15.52 14.96 37.32 0 21.81-15.53 36.77-14.95 14.95-37.04 14.95t-37.04-14.95L526.91-354.48q-29.43 21.74-68.15 34.61Q420.04-307 375.48-307Zm0-106q69.91 0 118.45-48.54 48.55-48.55 48.55-118.46t-48.55-118.46Q445.39-747 375.48-747t-118.46 48.54Q208.48-649.91 208.48-580t48.54 118.46Q305.57-413 375.48-413Z"/></svg>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </label>

        <!-- categorias -->

        @foreach ($categories as $category )
            <x-buttonicon>{{ $category->name }}</x-buttonicon>
        @endforeach

        <!-- tarjeta -->

        <div class="grid grid-cols3">

            @foreach ($supplies as $supply)
                <x-event title="{{ $supply->name }}" description="{{ $supply->description }}" />
            @endforeach



            </div>
    </div>
</x-layout>
