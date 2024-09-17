<x-layout>
    <div>
        <div x-data="{ opened: false }">
            <x-barra></x-barra>

            <div>
                <div class="flex justify-center">
                    <img class="w-48 ml-8 mt-8 mr-8 mb-4 rounded-full" src="{{ asset('img/icon.png') }}">
                </div>
                <div class="text-center justify-center">
                    <h1 class="font-main font-extrabold text-4xl">Personal information</h1>
                </div>
                <div class="text-center font-didone">
                    <p class="p-2">{{ $proveedor->name }}</p>
                    <p class="p-2">{{ $proveedor->email }}</p>
                    <p class="p-2">{{ $proveedor->phone }}</p>
                    <p class="p-2">{{ $proveedor->birthday }}</p>
                    <p class="p-2">{{ $proveedor->description }}</p>
                </div>
            </div>

        </div>
    </div>
</x-layout>
