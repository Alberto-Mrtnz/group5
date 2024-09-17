<x-layout>
    <div>
        <x-barra/>
        <div>
            <div class="flex justify-center">
                <img class="w-48 ml-8 mt-8 mr-8 mb-4 rounded-full" src="{{ asset('img/icon.png') }}">
            </div>
            <div class="text-center justify-center">
                <h1 class="font-main font-extrabold text-4xl">Personal information</h1>
            </div>
            <div class="text-center font-didone">
                <p class="my-2">{{ $user->name }}</p>
                <p class="my-2">{{ $user->email }}</p>
                <p class="my-2">{{ $user->phone }}</p>
            </div>
        </div>

        <div class="font-main text-3xl mt-12">
            <h1 class="text-center">My boards</h1>
        </div>

        <div class="grid grid-cols-3 my-12 mx-12 gap-x-4">
            @foreach($tableros as $tablero)
                <div class="bg-eventi-gris py-4 rounded-md">
                    <a href="{{ route('budgets.details', $tablero->id) }}">
                        <div class="flex flex-row space-x-1 justify-center items-center">
                            <div class="">
                                <img src="{{ asset('img/Home.jpeg') }}" class="w-52" id="img">
                            </div>
                            <div class="space-y-1">
                                <img src="{{ asset('img/animacion.jpg') }}" class="w-28" id="img">
                                <img src="{{ asset('img/salones-para-eventos.png') }}" class="w-28" id="img">
                            </div>
                        </div>

                        <div class="font-main text-xl ml-4">
                            <h1 class="text-center mt-3 font-bold">{{ $tablero->name }}</h1>
                            <p class="text-xs text-gray-600 text-center">{{ $tablero->date }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
