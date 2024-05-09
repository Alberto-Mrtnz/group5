<x-layout>

<form action="/login" method="POST">
    @csrf 
    <div>
        <x-input type="text" titulo="email" nombre="email"/>
        <x-input type="password" titulo="contraseña" nombre="contraseña"/>
</div>
</form>

</x-layout>