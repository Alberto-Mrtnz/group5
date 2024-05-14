<x-layout>
<div class="grid grid-cols-3 place-items-center">

    <div class="" style="">
        <img src="{{ asset('img/LOGIN.jpg') }}" class="h-screen bg-right">
    </div>

    <div class="col-span-2">
        <h1 class="mb-11 text-2xl text-center">EVYS</h1>
        <form action="/register" method="POST">
        @csrf

            <x-input titulo="Nombre" type="text" nombre="nomre"></x-input>
            <x-input titulo="Email" type="email" nombre="email"></x-input>
            <x-input titulo="Contraseña" type="password" nombre="contraseña"></x-input>
            <x-input titulo="Fecha de nacimiento" type="date" nombre="fecha de nacimiento"></x-input>

            <x-buttom>REGISTER</x-buttom>

        </form>
    </div>

</div>
</x-layout>
