<x-layout>
    <div class="grid grid-cols-3 place-items-center">
        <div class="" style="">
            <img src="{{ asset('img/LOGIN.jpg') }}" class="flex justify-around object-cover h-full w-full ">
        </div>
        <div class="col-span-2">
            <h1 class="mb-11 text-5xl text-center font-moon">FIKA</h1>
            <form action="/login" method="POST">
                @csrf

                <x-input type="text" titulo="¿Qué tipo de eventos atiendes? " multiple name="email" />
                <x-input type="password" titulo="¿Qué servicio específico ofreces?" name="password" />


                <x-buttom type="submit">REGISTER</x-buttom>
            </form>
        </div>
    </div>
</x-layout>
