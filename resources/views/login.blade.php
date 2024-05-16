<x-layout>
    <div class="grid grid-cols-3 place-items-center">

        <div class="" style="">
            <x-buttom class="flex justify-end items-end relative h-[calc(100vh-80px)]">LOGIN</x-buttom>
            <img src="{{ asset('img/LOGIN.jpg') }}" class="flex justify-around object-cover h-full w-full ">
        </div>

        <div class="col-span-2">
            <h1 class="mb-11 text-5xl text-center font-moon">EVYS</h1>
            <form action="/login" method="POST">
                @csrf

                <x-input type="text" titulo="User" name="email" />
                <x-input type="password" titulo="Password" name="password" />

                <x-buttomsd>Forgot password</x-buttomsd>

                <x-buttom>LOGIN</x-buttom>
            </form>
        </div>
    </div>
</x-layout>
