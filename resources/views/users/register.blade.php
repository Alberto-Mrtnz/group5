<x-layout>
<div class="grid grid-cols-3 place-items-center">

    <div class="" style="">
        <img src="{{ asset('img/LOGIN.jpg') }}" class="h-screen bg-right">
    </div>

    <div class="col-span-2">
        <img src="{{ asset('img/mainLogo.png') }}" class="w-64 mx-auto">
        <form action="/register" method="POST">
            @csrf

            <div class="grid grid-cols-2">
                <div class="col-span-1">
                    <x-input titulo="Nombre" type="text" name="name"></x-input>
                    <x-input titulo="Email" type="email" name="email"></x-input>
                    <x-input titulo="Contraseña" type="password" name="password"></x-input>
                </div>

                <div class="col-span-1 pl-4">
                    <x-input titulo="Fecha de nacimiento" type="date" name="birthday"></x-input>
                    <x-input titulo="Telefóno" type="text" name="phone"></x-input>
                    <label for="" class="block font-medium font-main text-lg">Elige tu tipo de cuenta</label>
                    <div class="inline-flex pt-3 space-x-5 italic">
                        <x-inputradio titulo="Proveedor" name="is_provider" valor="1"/>
                        <x-inputradio titulo="Cliente" name="is_provider" valor="0" checked/>
                    </div>
                </div>

            </div>


            <x-buttom class="size-20">REGISTER</x-buttom>

        </form>
    </div>

</div>
</x-layout>
