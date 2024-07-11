<x-layout>
    <div class="grid grid-cols-3 place-items-center">
        <div class="" style="">
            <img src="{{ asset('img/LOGIN.jpg') }}" class="flex justify-around object-cover h-full w-full ">
        </div>
        <div class="col-span-2">
            <h1 class="my-4 text-5xl text-center font-moon">FIKA</h1>
            <h1 class="my-4 text-2xl text-center font-monserrat">Cuestionario para dueños de servicios</h1>
            <form action="/login" method="POST">
                @csrf

                <label for="" class="block font-medium font-montserrat">¿Qué tipo de servicios atiendes?</label>
                    <div class="pt-3 italic">
                        <x-inputradio titulo="Bodas" name="is_provider" valor="Bodas"/>
                        <x-inputradio titulo="Fiestas corporativas" name="is_provider" valor="0" checked/>
                        <x-inputradio titulo="Cumpleaños" name="is_provider" valor="1"/>
                        <x-inputradio titulo="Bautizos" name="is_provider" valor="0" checked/>
                    </div>

                <x-buttom type="submit">REGISTER</x-buttom>
            </form>
        </div>
    </div>
</x-layout>
