<x-layout>
    <div>
        <nav class="flex justify-between w-full bg-gray-400">
            <div class="inline-flex ">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#5f6368">
                    <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                </svg>
                <h1 class="flex-grow text-3xl text-black font-moon">EVYS</h1>
            </div class>
            <div class="">
                <div>
                    <img class="content-between w-10 h-10 rounded-full " src="{{ asset('img/persona2.jpg') }}">
                </div>
            </div>
        </nav>

        <div class="grid grid-cols-2 m-4 border-2 border-stone-600 place-items-center">

            <div class="grid py-16 cols-start-2">
                <div class="pl-8 "> <img class="w-64 rou4nded-full mb-" src="{{ asset('img/icon.png') }}"></div>

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
