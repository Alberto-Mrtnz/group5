<x-layout>
<div class="grid grid-cols-3 place-items-center">

    <div class="" style="">
        <img src="{{ asset('img/LOGIN.jpg') }}" class="h-screen bg-right">
    </div>

    <div class="col-span-2">
        <h1 class="mb-11 text-center font-moon text-5xl">EVYS</h1>
        <form action="/register" method="POST">
        @csrf

            <x-input titulo="Nombre" type="text" nombre="nomre"></x-input>
            <x-input titulo="Email" type="email" nombre="email"></x-input>
            <x-input titulo="Contraseña" type="password" nombre="contraseña"></x-input>
            <x-input titulo="Fecha de nacimiento" type="date" nombre="fecha de nacimiento"></x-input>
            <x-input titulo="Dueño de servicio" type="radio" nombre="dueño de servicio"></x-input>
            <x-input titulo="Cliente" type="radio" nombre="cliente"></x-input>

            <div class="inline-flex">
                <x-inputra titulo="Dueño"></x-inputra>
                <x-inputra titulo="Cliente"></x-inputra>
            </div>
            
            <x-buttom class="size-20">REGISTER</x-buttom>

        </form>
    </div>

</div>
</x-layout>
