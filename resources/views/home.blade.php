<x-layout>
    <div class="relative">
        <!-- barra -->

            <nav class="w-full bg-gray-400 flex justify-between">
                <div class="inline-flex ">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#5f6368">
                        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                    </svg>
                    <h1 class="text-3xl font-moon flex-grow text-black">EVYS</h1>
                </div class>
                <div class="">
                    <div>
                        <img class=" h-10 w-10 rounded-full content-between" src="{{ asset('img/persona2.jpg') }}">
                    </div>
                </div>
            </nav>


        <!-- buscador -->
        <label class="relative block px-20 pt-5">
            <span class="sr-only">Search</span>
            <span class="absolute inset-y-0 left-0 flex items-center">
                <svg class="h-5 w-5 fill-slate-300" viewBox="0 0 20 20"></svg>
            </span>
            <div class="inline-flex grid-cols-2 w-full">
                <input
                    class="placeholder:text-slate-400 block col-span-1 justify-end bg-white w-full border border-slate-300 rounded-full py-2 pl-9 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
                    placeholder="Search..." type="text" name="search" />
                <button type="submit"
                    class="p-2.5 ms-2 text-sm font-medium text-white shadow-sm bg-white rounded-full border border-slate-300 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#5f6368">
                        <path
                            d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
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

        <div class="grid grid-cols-4">

            @foreach ($supplies as $supply)
                <x-event title="{{ $supply->name }}" description="{{ $supply->description }}" />
            @endforeach



            </div>
    </div>
</x-layout>
