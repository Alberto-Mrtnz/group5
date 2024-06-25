 <x-layout>
     <div>
         <nav class="py-6 fixed w-full top-0 z-40">
             <div class="container mx-auto flex text-white">

                 <h1 class="text-3xl font-moon flex-grow">FIKA</h1>

                 <div class="self-center flex flex-grow justify-between">
                     <div class="space-x-6">
                         <a href="#aboutUs" class="font-montserrat hover:border-b-4 border-white">Acerca de</a>
                         <a href="#ourServices" class="font-montserrat hover:border-b-4 border-white">Nuestro
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

         <div id="aboutUs" class="bg-gray-200 flex h-screen relative">
             <div class="absolute z-30 bottom-28 left-44 text-center border border-transparent bg-gray-300 py-16 px-16 w-2/5">
                <h2 class="font-montserrat font-semibold text-center text-2xl pb-2.5">¿Quiénes somos?</h2>
                <h2 class="font-montserrat text-xl">Facilitar el proceso de organización de eventos y celebraciones a
                     los salvadoreños mediante el desarrollo de una plataforma online que optimice la búsqueda y
                     contratación de servicios relacionados con eventos para que la gente pueda ahorrar dinero y
                     personalizar sus eventos por su cuenta.</h2>
             </div>

             <div class="absolute left-1/2">
                 <img src="{{ asset('img/imagen restaunate.jpg') }}" class="h-[calc(100vh-96px)] my-12">
             </div>
         </div>

         <div id="ourServices" class="bg-gray-300 h-screen">
             <h1 class="font-montserrat font-semibold text-center text-2xl py-10">Nuestros servicios</h1>
             <swiper-container class="flex items-center justify-center mx-12 pb-10" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
             slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
             coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true" loop="true" navigation="true">
                 <swiper-slide class="w-3/5 bg-center"><img class="mx-auto" src="{{ asset('img/Home.jpeg') }}"></swiper-slide>
                 <swiper-slide class="w-3/5"><img class="mx-auto" src="{{ asset('img/salones-para-eventos.png') }}"></swiper-slide>
                 <swiper-slide class="w-3/5"><img src="{{ asset('img/Home.jpeg') }}"></swiper-slide>
                 <swiper-slide class="w-3/5"><img src="{{ asset('img/salones-para-eventos.png') }}"></swiper-slide>
                 <swiper-slide class="w-3/5"><img src="{{ asset('img/Home.jpeg') }}"></swiper-slide>
                 <swiper-slide class="w-3/5"><img src="{{ asset('img/salones-para-eventos.png') }}"></swiper-slide>
             </swiper-container>
         </div>

         <div class="bg-gray-300">
            <h1>Client Experiences</h1>
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
