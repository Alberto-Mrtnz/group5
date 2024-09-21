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
                        <div class="grid grid-cols-2 justify-center items-center">
                            @foreach ($tablero->budgetItems->splice(0,3) as $item)
                                @if ($loop->index == 0)
                                    <div class="col-start-1">
                                        <img src='/img/supplies/{{ $item->supply->img }}' class="w-52" id="img">
                                    </div>
                                @endif
                                <div class="flex flex-col">
                                    @if ($loop->index == 1)
                                        <img src='/img/supplies/{{ $item->supply->img }}' class="w-28" id="img">
                                    @endif

                                    @if ($loop->index == 2)
                                        <img src='/img/supplies/{{ $item->supply->img}}' class="w-28" id="img">
                                    @endif
                                </div>
                            @endforeach
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
