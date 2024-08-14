<x-layout>
    <div>
        <div x-data="{opened: false}" >
               <x-barra></x-barra>

        <div class="grid grid-cols-2 m-2 border-2x place-items-center">
            <div class="grid py-16 cols-start-2">
                <div class="pl-8"> <img class="w-64 rounded-full mb-" src="{{ asset('img/icon.png') }}"></div>


                    <p class="p-4 rounded-lg w-80 bg-fika-piel">{{ $proveedor->name }}</p>
                    <p class="p-4 rounded-lg w-80 bg-fika-piel">{{ $proveedor->email }}</p>
                    <p class="p-4 rounded-lg w-80 bg-fika-piel">{{ $proveedor->phone }}</p>
                    <p class="p-4 rounded-lg w-80 bg-fika-piel">{{ $proveedor->birthday }}</p>
                    <p class="p-4 rounded-lg w-80 bg-fika-piel">{{ $proveedor->description }}</p>
                </div>

            </div>




        </div>
    </div>
</x-layout>
