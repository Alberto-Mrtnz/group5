<x-layout>
    <div x-data="{ opened: false }">
        <x-barra/>
                <div>
                    <div class="flex justify-center">
                        <img class="w-48 m-8 rounded-full" src="{{ asset('img/icon.png') }}">
                    </div>
                    <div class="text-center justify-center">
                        <h1 class="font-moon font-extrabold text-4xl">Personal information</h1>
                    </div>
                    <div class="text-center">
                        <p class="my-2">{{ $user->name }}</p>
                        <p class="my-2">{{ $user->email }}</p>
                        <p class="my-2">{{ $user->phone }}</p>
                    </div>
                </div>

        @foreach($tableros as $tablero)
            {{ $tablero }}

        @endforeach
    </div>
</x-layout>
