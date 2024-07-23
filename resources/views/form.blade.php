<x-layout>
    <div class="grid grid-cols-3 place-items-center">
        <div class="" style="">
            <img src="{{ asset('img/LOGIN.jpg') }}" class="flex justify-around object-cover h-full w-full ">
        </div>
        <div class="col-span-2">
            <img src="{{ asset('img/logo.jpeg') }}" class="w-36 justify-items-center">
            <h1 class="my-4 text-2xl text-center font-monserrat">Service Owners Questionnaire</h1>
            <form action="/login" method="POST">
                @csrf

                <label for="" class="block font-medium font-montserrat">What kind of services do you provide?</label>
                    <div class="space-y-2 italic">
                        <input type="radio" name="celebration" value="weddings"><label for="">Weddings</label><br>
                        <input type="radio" name="celebration" value="corporate_parties"><label for="">Corporate parties</label><br>
                        <input type="radio" name="celebration" value="birthday"><label for="">Birthday</label><br>
                        <input type="radio" name="celebration" value="Baptisms"><label for="">Baptisms</label><br>
                        <input type="radio" name="celebration" value="others"><label for="">Others:</label><br>
                        <x-input class="w-12" titulo="" type="text" name=""></x-input>
                    </div>

                <label for="" class="pt-4 block font-medium font-montserrat">Where is your business located?</label>
                    <div class="italic">
                        <select name="local">
                            <option>Ahuachapán</option>
                            <option>Santa Ana</option>
                            <option>Sonsonate</option>
                            <option>La Libertad</option>
                            <option>Chalatenango</option>
                            <option>Cuscatlán</option>
                            <option>San Salvador</option>
                            <option>La Paz</option>
                            <option>Cabañas</option>
                            <option>San Vicente</option>
                            <option>Usulután</option>
                            <option>San Miguel</option>
                            <option>Morazán</option>
                            <option>La Unión</option>
                          </select>
                    </div>

                <label for="" class="pt-4 block font-medium font-montserrat">What specific service do you offer?</label>
                    <div class="space-y-2 italic">
                        <input type="radio" name="service" value="veniu"><label for="">Veniu</label><br>
                        <input type="radio" name="service" value="decoration"><label for="">Decoration</label><br>
                        <input type="radio" name="service" value="banquets"><label for="">Banquets</label><br>
                        <input type="radio" name="service" value="audiovisual_equipment"><label for="">Audiovisual equipment</label><br>
                        <input type="radio" name="service" value="furniture"><label for="">Furniture</label><br>
                        <input type="radio" name="service" value="animation"><label for="">Animation</label><br>
                    </div>

                    <x-input titulo="¿Cuál es el rango de los precios?" type="text" name="phone"></x-input>
                    <input type="file" id="image"><label for="">Include images or videos of the service you offer.</label><br>
                    <x-input titulo="Escribe una descripción sobre tu servicio. (Sé claro y breve)." type="text" name="phone"></x-input>

                <x-buttom type="submit">REGISTER</x-buttom>
            </form>
        </div>
    </div>
</x-layout>
