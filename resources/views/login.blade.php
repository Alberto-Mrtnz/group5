<x-layout>
<div class="mt-44 ml-96 mr-80 float-end text-center">
<link rel="stylesheet" href="https://www.guatemala.com/fotos/2018/10/portada-final-carretera-a-el-salvador.jpg"/>
    <h1 class="mb-11 text-2xl ">EVYS</h1>
    <form action="/login" method="POST">
        @csrf 
        <div class="mb-2">
            <x-input type="text" titulo="User" nombre="email"/>
        </div>
        <div>
            <x-input type="password" titulo="Password" nombre="contraseña"/>
        </div>
        <div class="text-right">
            <x-buttom2 type="push" titulo="Forgot password" nombre="Forgot password"/>
        </div>
        <div class="mt-11">
            <x-buttom type="push" titulo="LOGIN" nombre="LOGIN"/>
        </div>
        <div>
            <img src="imagen restaurante.jpg" 
            alt="">
        </div>
    </form>
</div>
</x-layout>