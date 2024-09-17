<x-layout>
    <div class="grid grid-cols-3 place-items-center">
        <div class="col-span-1 relative" style="">
            <div class="fixed top-0 left-0">
                <img src="{{ asset('img/LOGIN.jpg') }}" class="h-screen">
            </div>
        </div>

        <div class="mx-40 col-span-2 max-h-screen">
            <div class="my-12 overflow-container">
                <img src="{{ asset('img/mainLogo.png') }}" class="w-36 mx-auto">
                <h1 class="my-8 text-2xl text-center font-semibold font-main">Service Owners Questionnaire</h1>
                <form action="/login" method="POST">
                @csrf

                <label for="" class="block font-medium font-main text-lg">Where is your business located?</label>
                    <div class="font-didone italic pb-4">
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

                <label for="" class="block font-medium font-main text-lg">What kind of services do you provide?</label>
                    <div class="pb-4 space-y-2 italic">
                        <input type="radio" name="celebration" value="weddings"><label for="" class="text-didone">Weddings</label><br>
                        <input type="radio" name="celebration" value="corporate_parties"><label for="">Corporate parties</label><br>
                        <input type="radio" name="celebration" value="birthday"><label for="">Birthday</label><br>
                        <input type="radio" name="celebration" value="Baptisms"><label for="">Baptisms</label><br>
                        <input type="radio" name="celebration" value="others"><label for="">Others:</label><br>
                        <x-input class="w-12" titulo="" type="text" name=""></x-input>
                    </div>

                <label for="" class="block font-medium font-main text-lg">What specific service do you offer?</label>
                <div class="pb-4 space-y-2 italic">
                    <input type="radio" name="service" value="veniu"><label for="">Venue</label><br>
                        <input type="radio" name="service" value="decoration"><label for="">Decoration</label><br>
                        <input type="radio" name="service" value="banquets"><label for="">Feast</label><br>
                        <input type="radio" name="service" value="audiovisual_equipment"><label for="">Audiovisual equipment</label><br>
                        <input type="radio" name="service" value="furniture"><label for="">Furniture</label><br>
                        <input type="radio" name="service" value="animation"><label for="">Animation</label><br>
                    </div>

                    <label for="" class="block font-medium font-main text-lg">Include images or videos of the service you offer:</label>
                    <input type="file" id="image">
                    <x-input titulo="Write the price of your services:" type="text" name="phone"></x-input>
                    <x-input titulo="Write a description of your service:" type="text" name="phone"></x-input>
                    <x-input titulo="Do you offer any service packages, promotions or special discounts that you would like to publicize?" type="text" name="phone" placeholder="Specify what it consists of"></x-input>
                    <x-input titulo="What kind of experience do you have in event organization?" type="text" name="phone" placeholder="Describe it"></x-input>
                <div class="pb-12">
                    <x-buttom type="submit">REGISTER</x-buttom>
                </div>
            </form>
        </div>
    </div>
    </div>
</x-layout>
