<x-layout>
    <div class="relative">

        <x-barra></x-barra>
        <!-- buscador -->

        <label class="block px-20 pt-5">
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
                <x-event id="{{ $supply->id }}" img="{{ $supply->img }}" title="{{ $supply->name }}" description="{{ $supply->description }}" />
            @endforeach
        </div>
        
    </div>
</x-layout>
