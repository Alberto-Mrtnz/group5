<x-layout>
<form action="/login" method="POST">
    @csrf 
<div>
    <x-input titulo="Nombre" type="text" nombre="nomre"></x-input>
    <x-input titulo="Email" type="email" nombre="email"></x-input>
    <x-input titulo="Contraseña" type="password" nombre="contraseña"></x-input>
    <x-input titulo="Fecha de nacimiento" type="date" nombre="fecha de nacimiento"></x-input>
</div>

</form>
</x-layout>
