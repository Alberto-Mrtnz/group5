<x-layout>
<div class="mt-44 ml-96 mr-80 float-end text-center">
<form action="/login" method="POST">
    @csrf 
    <h1 class="mb-11 text-2xl ">EVYS</h1>
    <div class="mb-2">
    <x-input titulo="Nombre" type="text" nombre="nomre"></x-input>
    </div>
    <div class="mb-2">
    <x-input titulo="Email" type="email" nombre="email"></x-input>
    </div>
    <div class="mb-2">
    <x-input titulo="Contraseña" type="password" nombre="contraseña"></x-input>
    </div>
    <div>
    <x-input titulo="Fecha de nacimiento" type="date" nombre="fecha de nacimiento"></x-input>
    </div>
    <div class="mt-11">
            <x-buttom type="push" titulo="REGISTER" nombre="REGISTER "/>
    </div>

</form>
</div>
</x-layout>
