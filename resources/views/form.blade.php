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
                        <input type="radio" name="service" value="veniu"><label for="">Veniu</label><br>
                        <input type="radio" name="service" value="decoration"><label for="">Decoration</label><br>
                        <input type="radio" name="service" value="banquets"><label for="">Banquets</label><br>
                        <input type="radio" name="service" value="audiovisual_equipment"><label for="">Audiovisual equipment</label><br>
                        <input type="radio" name="service" value="furniture"><label for="">Furniture</label><br>
                        <input type="radio" name="service" value="animation"><label for="">Animation</label><br>
                    </div>

                    <label for="" class="block font-medium font-montserrat">¿Qué tipo de servicios atiendes?</label>
                    <div class="pt-3 italic">
                        <input type="radio" name="service" value="veniu"><label for="">Veniu</label><br>
                        <input type="radio" name="service" value="decoration"><label for="">Decoration</label><br>
                        <input type="radio" name="service" value="banquets"><label for="">Banquets</label><br>
                        <input type="radio" name="service" value="audiovisual_equipment"><label for="">Audiovisual equipment</label><br>
                        <input type="radio" name="service" value="furniture"><label for="">Furniture</label><br>
                        <input type="radio" name="service" value="animation"><label for="">Animation</label><br>
                    </div>

                <x-buttom type="submit">REGISTER</x-buttom>
            </form>
        </div>
    </div>
</x-layout>
