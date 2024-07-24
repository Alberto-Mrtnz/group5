<x-layout>
    <div>
        <div x-data="{opened: false}" >
               <x-barra></x-barra>
        <div class="grid grid-cols-2 m-2 border-2x place-items-center">
            <div class="grid py-16 cols-start-2">
                <div class="pl-8 "> <img class="w-64 rounded-full mb-" src="{{ asset('img/icon.png') }}"></div>


            </div>


                <div class="grid pt-2 cols-start-2 space-y-12">
                    <p class="p-4 rounded-lg w-80 bg-fika-piel">{{ $user->name }}</p>
                    <p class="p-4 rounded-lg w-80 bg-fika-piel">{{ $user->email }}</p>
                    <p class="p-4 rounded-lg w-80 bg-fika-piel">{{ $user->phone }}</p>

                </div>
        </div>

        
    </div>
</x-layout>
