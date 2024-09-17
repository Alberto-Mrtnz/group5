<x-layout>
    <!-- Barra -->
    <x-barra/>

    <h1 class="mx-6 font-didone font-bold text-2xl mt-12 mb-1 text-center">{{ $tablero->name }}</h1>
    <p class="text-gray-600 text-center mb-4">{{ $tablero->date }}</p>

    @foreach($tablero->budgetItems as $item)
        <!-- tarjeta -->
        <div class="grid grid-cols-3 gap-3 mb-12">
                <a href="/service/{{$item->supply->id}}">
                    <div class="pt-6 pr-6 pl-9">
                        <div class="max-w-sm overflow-hidden transition duration-300 ease-in-out delay-150 rounded-lg shadow-lg bg-gray-200 hover:-translate-y-1 hover:scale-1">
                            <img class="m-6 rounded-lg w-min size-56 w-max-full mx-auto px-2" src="/img/supplies/{{$item->supply->img}}">
                            <div class="px-1 py-1">
                                <div class="mb-2 font-bold text-center">{{$item->supply->name}}</div>
                                <p class="text-base text-center text-gray-700">{{$item->supply->description}}</p>
                            </div>
                            <div class="inline-flex justify-end w-full px-6 pt-2 pb-2 ">
                                <svg class="rounded-lg hover:bg-gray-400 size-8" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1F1A37"><path d="M520-400h80v-120h120v-80H600v-120h-80v120H400v80h120v120ZM320-240q-33 0-56.5-23.5T240-320v-480q0-33 23.5-56.5T320-880h480q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H320Zm0-80h480v-480H320v480ZM160-80q-33 0-56.5-23.5T80-160v-560h80v560h560v80H160Zm160-720v480-480Z"/></svg>
                            </div>
                        </div>
                    </div>
                </a>
        </div>
    @endforeach
</x-layout>
