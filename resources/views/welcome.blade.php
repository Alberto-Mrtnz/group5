 <x-layout>
<div class="relative">
    <nav class="py-6 fixed w-full top-0">
        <div class="container mx-auto flex text-white">

            <h1 class="text-3xl font-moon flex-grow">EVYS</h1>

            <div class="self-center flex flex-grow justify-between">
                <div>
                    <a href="" class="font-montserrat hover:border-b-4 border-white">Acerca de</a>
                    <a href="" class="font-montserrat hover:border-b-4 border-white mx-8">Nuestro servicios</a>
                    <a href="" class="font-montserrat hover:border-b-4 border-white">Contactos</a>
                </div>
                <div>
                    <a href="" class="font-montserrat hover:text-gray-500">Iniciar sesión</a>
                    <a href="" class="font-montserrat border border-white hover:text-gray-500 rounded-lg p-2">Registrarse</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="w-full h-screen mt-50 relative">
        <img src="{{ asset('img/fondo-homepage.jpg') }}" class="h-full w-full">
        <div class="absolute inset-0 flex items-center justify-center">
            <h2 class="font-moon text-5xl text-white mt-72">Donde encuentras los mejores lugares para tus eventos</h2>
        </div>
    </div>

    <div class="bg-gray-200 grid grid-cols-5">
        <div class="col-span-3 justify-center text-center mx-44 my-44 border border-transparent bg-gray-300">
            <h2 class="font-montserrat font-semibold text-center text-2xl pb-2.5">¿Quiénes somos?</h2>
            <h2 class="font-montserrat text-xl">Facilitar el proceso de organización de eventos y celebraciones a los salvadoreños mediante el desarrollo de una plataforma online que optimice la búsqueda y contratación de servicios relacionados con eventos para que la gente pueda ahorrar dinero y personalizar sus eventos por su cuenta.</h2>
        </div>
        <div class="col-span-2">
            <img src="{{ asset('img/salones-para-eventos.png') }}" class="my-36 mr-12">
        </div>
    </div>

    <div class="bg-gray-300">
        <h1 class="font-montserrat font-semibold text-center text-2xl">Nuestros servicios</h1>
        <swiper-container>
            <swiper-slide><img src="{{ asset('img/salones-para-eventos.png') }}"></swiper-slide>
            <swiper-slide><img src="{{ asset('img/salones-para-eventos.png') }}"></swiper-slide>
            <swiper-slide><img src="{{ asset('img/salones-para-eventos.png') }}"></swiper-slide>
        </swiper-container>
    </div>

</div>
</x-layout>

