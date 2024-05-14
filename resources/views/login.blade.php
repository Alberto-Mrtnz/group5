<x-layout>
    <div class="grid grid-cols-3 place-items-center">

        <div class="" style="">
            <img src="{{ asset('img/LOGIN.jpg') }}" class="h-screen bg-right">
        </div>

        <div class="col-span-2">
            <h1 class="mb-11 text-2xl text-center">EVYS</h1>
            <form action="/login" method="POST">
                @csrf

                <x-input type="text" titulo="User" name="email" />
                <x-input type="password" titulo="Password" name="password" />

                <x-buttomsd>Fotgot password</x-buttomsd>

                <x-buttom>LOGIN</x-buttom>
            </form>
        </div>
    </div>
</x-layout>
