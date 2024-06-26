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

        <div class="grid grid-cols-3">

            <div class="col-span-1 py-16">
                <div class="pl-8"> <img class="w-64 rounded-full mb-" src="{{ asset('img/icon.png') }}"></div>
            </div>

            <div class="col-span-1 grid">
                <input class="mt-4 rounded-lg h-16 w-80"/>
                <x-buttonicon></x-buttonicon>
                <input class="rounded-lg h-36 w-80"/>
            </div>

        </div>
            <x-event/>
        <div>

        </div>
    </div>
</x-layout>
