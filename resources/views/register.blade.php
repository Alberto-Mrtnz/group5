<x-layout>
<div class="grid grid-cols-3 place-items-center">

    <div class="" style="">
        <img src="{{ asset('img/LOGIN.jpg') }}" class="h-screen bg-right">
    </div>

    <div class="col-span-2">
        <h1 class="mb-11 text-center font-moon text-5xl">EVYS</h1>
        <form action="/register" method="POST">
            @csrf

            <x-input titulo="Nombre" type="text" name="name"></x-input>
            <x-input titulo="Email" type="email" name="email"></x-input>
            <x-input titulo="Contraseña" type="password" name="password"></x-input>
            <x-input titulo="Fecha de nacimiento" type="date" name="birthday"></x-input>
            <x-input titulo="Telefóno" type="text" name="phone"></x-input>


            <div class="inline-flex">
                <x-inputra titulo="Proveedor" name="is_provider" valor="1"></x-inputra>
                <x-inputra titulo="Cliente" name="is_provider" valor="0"></x-inputra>
            </div>

            <x-buttom class="size-20">REGISTER</x-buttom>
        </form>
    </div>

</div>
</x-layout>
