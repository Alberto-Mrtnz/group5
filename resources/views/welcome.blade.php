 <x-layout>
     <div>
         <nav class="py-6 fixed w-full top-0 z-40 backdrop-blur-sm">
             <div class="container flex mx-auto text-white">

                <img src="{{ asset('img/eventi.png') }}" class="w-28 justify-items-center">

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

         <div id="aboutUs" class="relative flex h-screen">
             <div
                 class="absolute z-30 bottom-32 left-[160px] text-center border border-transparent bg-eventi-gris text-black py-16 px-16 w-2/5">
                 <h2 class="font-montserrat font-semibold text-center text-2xl pb-2.5">¿Quiénes somos?</h2>
                 <h2 class="text-xl font-montserrat">Facilitar el proceso de organización de eventos y celebraciones a
                     los salvadoreños mediante el desarrollo de una plataforma online que optimice la búsqueda y
                     contratación de servicios relacionados con eventos para que la gente pueda ahorrar dinero y
                     personalizar sus eventos por su cuenta.</h2>
             </div>

             <div class="absolute right-[160px]">
                 <img src="{{ asset('img/imagen restaunate.jpg') }}" class="h-[calc(100vh-96px)] my-12">
             </div>
         </div>

         <div id="ourServices" class="h-screen bg-">
             <h1 class="py-10 text-2xl font-semibold text-center font-montserrat">Our services</h1>
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

         <div class="grid h-screen mx-12 bg- place-content-center">
             <h1 class="py-10 text-2xl font-semibold text-center font-montserrat">Client Experiences</h1>
             <div class="grid grid-cols-3 place-items-center">

                 <x-review />

                 <x-review />

                 <x-review />

             </div>
         </div>

         <section class="grid grid-cols-3 text-black bg-eventi-cafe" id="contacto">

            <img src="{{ asset('img/mainlogo.png') }}" class="w-48 justify-items-center">

             <div class="col-span-1 font-medium font-montserrat">
                 <h1 class="my-8 text-center px-14">Leave us a comment about our web site</h1>
                 <form action="" method="post" class="flex flex-col mx-16">
                     <input class="text-black w-full h-8 rounded-2xl" />
                     <button
                         class="bg-fika-wisteria w-28 ml-auto rounded-2xl font-medium py-0.5 px-4 font-montserrat text-center text-lg mt-2"
                         type="submit">Send</button>
                 </form>
             </div>

             <div class="col-span-1 ml-8 font-medium font-montserrat">
                 <h2 class="mt-12 mb-6">Contacts:</h2>
                 <h2 class="mb-1">Our phone number</h2>
                 <h2 class="">Our e-mail address</h2>
             </div>
             <div class="col-span-3 mx-4 font-medium border-t border-gray-200 font-montserrat">
                 <h1 class="my-4">Copyright © 2024 Eventi - Privacy - Terms of Use</h1>
             </div>
         </section>
     </div>
 </x-layout>
