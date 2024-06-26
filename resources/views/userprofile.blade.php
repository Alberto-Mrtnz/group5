<x-layout>
    <div>
        <div class="">
            <nav class="w-full grid-cols-2 py-0 bg-gray-300">
                <div class="inline-flex w-full">
                    <x-buttonicon2></x-buttonicon2>
                        <div class="py-2">
                            <img class="w-10 h-10 rounded-full" src="{{ asset('img/persona2.jpg') }}">
                        </div>
                        <h1 class="flex-grow px-2 py-2 text-3xl text-black font-moon">EVYS</h1>
                        <div class="px-3 py-2">
                            <img class="justify-end w-10 h-10 rounded-full " src="{{ asset('img/persona2.jpg') }}">
                        </div>
                </div>
            </nav>
        </div>

        <div class="grid grid-cols-2 m-2 border-2 border-stone-600 place-items-center">

            <div class="grid py-16 cols-start-2">
                <div class="pl-8 "> <img class="w-64 rounded-full mb-" src="{{ asset('img/icon.png') }}"></div>

                <input class="mt-10 rounded-lg w-80 h-36"/>
            </div>

            <div class="grid pt-2 cols-start-2">
                <input class="h-16 mt-4 rounded-lg w-80"/>
                <input class="h-16 mt-4 rounded-lg w-80"/>
                <input class="h-16 mt-4 rounded-lg w-80"/>
                <input class="h-16 mt-4 rounded-lg w-80"/>
            </div>

        </div>
    </div>
</x-layout>
