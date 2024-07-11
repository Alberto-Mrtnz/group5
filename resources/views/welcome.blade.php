 <x-layout>
     <div>
         <nav class="py-6 fixed w-full top-0 z-40 backdrop-blur-[2px]">
             <div class="container flex mx-auto text-white">

                 <h1 class="flex-grow text-3xl font-moon">FIKA</h1>

                 <div class="flex self-center justify-between flex-grow">
                     <div class="space-x-6">
                         <a href="#aboutUs" class="border-white font-montserrat hover:border-b-4">Acerca de</a>
                         <a href="#ourServices" class="border-white font-montserrat hover:border-b-4">Nuestro
                             servicios</a>
                         <a href="#contacto" class="border-white font-montserrat hover:border-b-4">Contactos</a>
                     </div>
                     <div class="space-x-4">
                         <a href="{{ route('login') }}" class="font-montserrat hover:text-gray-500">Iniciar sesión</a>
                          <a href="{{ route('register') }}" class="p-2 rounded-lg font-montserrat hover:text-gray-500">Registrarse</a>
                     </div>
                 </div>
             </div>
         </nav>

         <div class="relative w-full h-screen mt-50">
             <img src="{{ asset('img/fondo-homepage.jpg') }}" class="w-full h-full">
             <div class="absolute inset-0 flex items-center justify-center">
                 <h2 class="text-5xl text-white font-moon mt-72">Donde encuentras los mejores lugares para tus eventos
                 </h2>
             </div>
         </div>

         <div id="aboutUs" class="relative flex h-screen bg-gray-100">
             <div
                 class="absolute z-30 bottom-32 left-[150px] text-center border border-transparent bg-fika-brown text-black py-16 px-16 w-2/5">
                 <h2 class="font-montserrat font-semibold text-center text-2xl pb-2.5">¿Quiénes somos?</h2>
                 <h2 class="text-xl font-montserrat">Facilitar el proceso de organización de eventos y celebraciones a
                     los salvadoreños mediante el desarrollo de una plataforma online que optimice la búsqueda y
                     contratación de servicios relacionados con eventos para que la gente pueda ahorrar dinero y
                     personalizar sus eventos por su cuenta.</h2>
             </div>

             <div class="absolute right-[150px]">
                 <img src="{{ asset('img/imagen restaunate.jpg') }}" class="h-[calc(100vh-96px)] my-12">
             </div>
         </div>

         <div id="ourServices" class="h-screen bg-gray-100">
             <h1 class="py-10 text-2xl font-semibold text-center font-montserrat">Nuestros servicios</h1>
             <swiper-container class="flex items-center justify-center pb-10 mx-12" pagination="true" effect="coverflow"
                 grab-cursor="true" centered-slides="true" slides-per-view="auto" coverflow-effect-rotate="50"
                 coverflow-effect-stretch="0" coverflow-effect-depth="100" coverflow-effect-modifier="1"
                 coverflow-effect-slide-shadows="true" loop="true" navigation="true">
                 <swiper-slide class="w-3/5 bg-center"><img class="mx-auto"
                         src="{{ asset('img/Home.jpeg') }}"></swiper-slide>
                 <swiper-slide class="w-3/5"><img class="mx-auto"
                         src="{{ asset('img/salones-para-eventos.png') }}"></swiper-slide>
                 <swiper-slide class="w-3/5"><img src="{{ asset('img/Home.jpeg') }}"></swiper-slide>
                 <swiper-slide class="w-3/5"><img src="{{ asset('img/salones-para-eventos.png') }}"></swiper-slide>
                 <swiper-slide class="w-3/5"><img src="{{ asset('img/Home.jpeg') }}"></swiper-slide>
                 <swiper-slide class="w-3/5"><img src="{{ asset('img/salones-para-eventos.png') }}"></swiper-slide>
             </swiper-container>
         </div>

         <div class="grid h-screen mx-12 bg-gray-100 place-content-center">
             <h1 class="py-10 text-2xl font-semibold text-center font-montserrat">Client Experiences</h1>
             <div class="grid grid-cols-3 place-items-center">

                 <x-review />

                 <x-review />

                 <x-review />

             </div>
         </div>

         <section class="grid grid-cols-3 text-white bg-fika-black" id="contacto">

             <h1 class="py-24 text-5xl text-center font-moon">FIKA</h1>

             <div class="col-span-1 font-medium font-montserrat">
                 <h1 class="my-8 text-center px-14">Dejanos un comentario sobre nuestro web site</h1>
                 <form action="" method="post" class="flex flex-col mx-16">
                     <input class="w-full h-8 rounded-2xl" />
                     <button
                         class="bg-fika-wisteria w-28 ml-auto rounded-2xl font-medium py-0.5 px-4 font-montserrat text-center text-lg mt-2"
                         type="submit">Enviar</button>
                 </form>
             </div>

             <div class="col-span-1 ml-8 font-medium font-montserrat">
                 <h2 class="mt-12 mb-6">Contactos:</h2>
                 <h2 class="mb-1">Nuestro número de teléfono</h2>
                 <h2 class="">Nuestro correo electrónico</h2>
             </div>
             <div class="col-span-3 mx-4 font-medium border-t border-gray-200 font-montserrat">
                 <h1 class="my-4">Copyright © 2024 Fika - Privacidad - Términos</h1>
             </div>
         </section>
     </div>
 </x-layout>
