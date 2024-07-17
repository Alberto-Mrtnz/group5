<x-layout>
    <div class="grid grid-cols-3 place-items-center">

        <div class="" style="">
            <img src="{{ asset('img/LOGIN.jpg') }}" class="flex justify-around object-cover h-full w-full ">
        </div>

        <div class="col-span-2">
            <img src="{{ asset('img/eventi.png') }}" class="w-64 justify-items-center">
            <form action="/login" method="POST">
                @csrf

                <x-input type="text" titulo="User" name="email" />
                <x-input type="password" titulo="Password" name="password" />


                <x-buttomsd>Forgot password</x-buttomsd>

                <div class="text-right">
                </div>

                <x-buttom type="submit">LOGIN</x-buttom>
            </form>
        </div>
    </div>
</x-layout>
