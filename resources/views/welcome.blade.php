 <x-layout>
     <div class="relative">
         <nav class="py-6 fixed w-full top-0 z-40">
             <div class="container mx-auto flex text-white">

                 <h1 class="text-3xl font-moon flex-grow">FIKA</h1>

                 <div class="self-center flex flex-grow justify-between">
                     <div class="space-x-6">
                         <a href="#aboutUs" class="font-montserrat hover:border-b-4 border-white">Acerca de</a>
                         <a href="#ourServices#ourServices" class="font-montserrat hover:border-b-4 border-white">Nuestro
                             servicios</a>
                         <a href="" class="font-montserrat hover:border-b-4 border-white">Contactos</a>
                     </div>
                     <div class="space-x-4">
                         <a href="{{ route('login') }}" class="font-montserrat hover:text-gray-500">Iniciar sesión</a>
                         <a href="/register"
                             class="font-montserrat hover:text-gray-500 rounded-lg p-2">Registrarse</a>
                     </div>
                 </div>
             </div>
         </nav>

         <div class="w-full h-screen mt-50 relative">
             <img src="{{ asset('img/fondo-homepage.jpg') }}" class="h-full w-full">
             <div class="absolute inset-0 flex items-center justify-center">
                 <h2 class="font-moon text-5xl text-white mt-72">Donde encuentras los mejores lugares para tus eventos
                 </h2>
             </div>
         </div>

         <div id="aboutUs" class="bg-gray-200 py-16 flex flex-col justify-end items-end">
             <div class="absolute justify-center text-center border border-transparent bg-gray-300 w-5">
                <h2 class="font-montserrat font-semibold text-center text-2xl pb-2.5">¿Quiénes somos?</h2>
                <h2 class="font-montserrat text-xl">Facilitar el proceso de organización de eventos y celebraciones a
                     los salvadoreños mediante el desarrollo de una plataforma online que optimice la búsqueda y
                     contratación de servicios relacionados con eventos para que la gente pueda ahorrar dinero y
                     personalizar sus eventos por su cuenta.</h2>
             </div>

             <div class="static flex items-center justify-center w-2/5">
                 <img src="{{ asset('img/imagen restaunate.jpg') }}" class="">
             </div>
         </div>

         <div id="ourServices" class="bg-gray-300">
         <div id="ourServices" class="bg-gray-300">
             <h1 class="font-montserrat font-semibold text-center text-2xl">Nuestros servicios</h1>
             <swiper-container class="flex items-center justify-center w-64">
                 <swiper-slide><img src="{{ asset('img/salones-para-eventos.png') }}"></swiper-slide>
                 <swiper-slide><img src="{{ asset('img/salones-para-eventos.png') }}"></swiper-slide>
                 <swiper-slide><img src="{{ asset('img/salones-para-eventos.png') }}"></swiper-slide>
             </swiper-container>
         </div>

         <section class="bg-gray-400 grid grid-cols-3">
            <div class="col-span-1">
                <h1 class="text-5xl font-moon text-center py-24">FIKA</h1>
            </div>
            <div class="font-medium font-montserrat col-span-1">
                <h2 class="my-8">Contactos:</h2>
                <h2 class="mb-1">+503 67982315</h2>
                <h2>Fika_eventos@gmail.com</h2>
            </div>
            <div class="font-medium font-montserrat col-span-1">
                <h2 class="my-8">Síguenos en redes sociales:</h2>
            </div>
            <div class="font-medium font-montserrat mx-4 border-t border-gray-200 col-span-3">
                <h1 class="my-4">Copyright © 2024 Fika - Privacidad - Términos</h1>
            </div>
         </section>
     </div>
 </x-layout>
