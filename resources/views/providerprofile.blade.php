<x-layout>
    <div>
        <div x-data="{opened: false}" >
               <x-barra></x-barra>

        <div class="grid grid-cols-2 m-2 border-2x place-items-center">
            <div class="grid py-16 cols-start-2">
                <div class="pl-8 "> <img class="w-64 rounded-full mb-" src="{{ asset('img/icon.png') }}"></div>
                @auth
                    {{ auth()->user()->name }}
                @endauth

                <input class="mt-10 rounded-lg w-80 h-36 bg-fika-piel"/>
            </div>



           

        </div>
    </div>
</x-layout>
