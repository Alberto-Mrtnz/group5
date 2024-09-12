<x-layout>
    <div x-data="{ opened: false }">
        <x-barra/>
            <div class="grid grid-cols-2 m-2 border-2x place-items-center">
                <div class="grid py-16 cols-start-2">
                    <div class="pl-8">
                    </div>
                </div>

                <div>
                    <div class="p-6 rounded-lg mt-7 bg-slate-300">
                        <h1 class="font-moon font-extrabold text-4xl mb-4">Provider contact information</h1>
                        <div class="flex">
                            <img class="w-14 rounded-full" src="{{ asset('img/icon.png') }}">
                            <p class="p-4 rounded-lg w-80 bg-fika-piel">{{ $user->name }}</p>
                        </div>
                    </div>

                    <p class="p-4 rounded-lg w-80 bg-fika-piel">{{ $user->email }}</p>
                    <p class="p-4 rounded-lg w-80 bg-fika-piel">{{ $user->phone }}</p>
                </div>
            </div>
        @foreach($tableros as $tablero)
        {{ $tablero }}

        @endforeach
    </div>
</x-layout>
