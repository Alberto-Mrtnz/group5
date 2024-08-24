 <x-layout>
     <div>
         <nav class="py-6 fixed w-full top-0 z-40 backdrop-blur-sm">
             <div class="container flex mx-auto text-black">

                 <img src="{{ asset('img/eventi.png') }}" class="w-28 justify-items-center">

                 <div class="flex self-center justify-between flex-grow">
                     <div class="space-x-6">
                         <a href="#aboutUs" class="border-white font-montserrat hover:border-b-4">About Us</a>
                         <a href="#misionVision" class="border-white font-montserrat hover:border-b-4">Mision</a>
                         <a href="#misionVision" class="border-white font-montserrat hover:border-b-4">Vision</a>
                         <a href="#ourServices" class="border-white font-montserrat hover:border-b-4">Our services</a>
                         <a href="#contacto" class="border-white font-montserrat hover:border-b-4">Contact</a>
                     </div>
                     <div class="space-x-4">
                         <a href="{{ route('login') }}" class="font-montserrat hover:text-gray-500">Login</a>
                         <a href="{{ route('register') }}"
                             class="p-2 rounded-lg font-montserrat hover:text-gray-500">Register</a>
                     </div>
                 </div>
             </div>
         </nav>

         <div class="relative w-full h-screen mt-50">
             <img src="{{ asset('img/fondo-homepage.jpg') }}" class="w-full h-full">
             <div class="absolute inset-0 flex items-center justify-center">
                 <h2 class="text-5xl text-white font-moon mt-72">Where to find the best places for your events
                 </h2>
             </div>
         </div>

         <div id="aboutUs" class="relative flex h-screen">
             <div
                 class="absolute z-30 bottom-32 left-[160px] text-center border border-transparent bg-eventi-gris text-black py-16 px-16 w-2/5">
                 <h2 class="font-montserrat font-semibold text-center text-2xl pb-2.5">Who are we?</h2>
                 <h2 class="text-xl font-montserrat">Facilitate the process of organizing events and celebrations for
                     Salvadorans by developing an online platform that optimizes the search and contracting of
                     event-related services so that people can save money and customize their events on their own.
                     customize their events on their own.</h2>
             </div>

             <div class="absolute right-[160px]">
                 <img src="{{ asset('img/imagen restaunate.jpg') }}" class="h-[calc(100vh-96px)] my-12">
             </div>
         </div>

         <div id="misionVision" class="relative flex h-screen">
             <div
                 class="absolute z-30 bottom-32 left-[160px] text-center border border-transparent bg-eventi-gris text-black py-16 px-16 w-2/5">
                 <h2 class="font-montserrat font-semibold text-center text-2xl pb-2.5">Mision</h2>
                 <h2 class="text-xl font-montserrat">To provide the organized search of services prior to an event or
                     celebration offering diverse services exceeding the expectations of our users.</h2>
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

                 <div class="mx-4 text-black border-transparent border-2 rounded-xl bg-eventi-rosa">
                     <img class="w-10 h-10 mt-4 ml-4 rounded-full" src="{{ asset('img/icon.png') }}">
                     <h1 class="px-12 pb-8 text-center">"Our product launch was a huge success because of Eventi. Our
                         clients were thrilled with the sleek modern location, the excellent AV setup, and the
                         delectable catering. Their coordinator for the event was really effective. Eventi assisted us
                         in showcasing our brand with precision."</h1>
                 </div>

                 <div class="mx-4 text-black border-transparent border-2 rounded-xl bg-eventi-rosa">
                     <img class="w-10 h-10 mt-4 ml-4 rounded-full" src="{{ asset('img/icon.png') }}">
                     <h1 class="px-12 pb-8 text-center">"Eventi made our celebration truly memorable. Their attention to
                         detail and
                         professional service exceeded our expectations."</h1>
                 </div>

                 <div class="mx-4 text-black border-transparent border-2 rounded-xl bg-eventi-rosa">
                     <img class="w-10 h-10 mt-4 ml-4 rounded-full" src="{{ asset('img/icon.png') }}">
                     <h1 class="px-12 pb-8 text-center">"The Eventi website has an excellent design that benefits
                         vendors as well as customers. It was simple for me as a customer to look through locations,
                         weigh services, and make judgments. For vendors, this is a great way to present their products.
                         Everyone's involvement in event preparation is streamlined by the user-friendly design and
                         smooth booking procedure."</h1>
                 </div>

             </div>
         </div>

         <section class="grid grid-cols-3 text-black bg-[#64A1B9]" id="contacto">

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
