<x-layout>
    <div>
        <div x-data="{opened: false}" >
            <x-barra></x-barra>

        <div class="grid grid-cols-3">
            <div class="col-span-1 py-16">
                <img class="w-64 mx-12 rounded-full" src="{{ asset('img/icon.png') }}">
            </div>
            <div class="col-span-2 py-">
                <h1 class="my-10 text-2xl font-montserrat">Nombre de usuario</h1>
                <x-buttom>Tipos de eventos</x-buttom>
                <h1 class="text-2xl font-montserrat">Descripión</h1>
            </div>
        </div>

            <x-event id="3" title="asdba" description="asdd"/>
        <div>
    </div>
</x-layout>
