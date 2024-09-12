 <x-layout>
     <div>
         <nav id="bar" class="fixed top-0 z-40 w-full py-2 text-white backdrop-blur-sm">
             <div class="container flex mx-auto">

                 <a href="#home">
                     <img id="logo" src="{{ asset('img/whiteLogo.png') }}" class="mr-8 w-28 justify-items-center">
                 </a>

                 <div class="flex self-center justify-between flex-grow">
                     <div class="space-x-6 font-didone">
                         <a href="#aboutUs" class="border-white font-montserrat hover:border-b-2">About Us</a>
                         <a href="#misionVision" class="border-white font-montserrat hover:border-b-2">Mision</a>
                         <a href="#misionVision" class="border-white font-montserrat hover:border-b-2">Vision</a>
                         <a href="#ourServices" class="border-white font-montserrat hover:border-b-2">Our services</a>
                         <a href="#contacto" class="border-white font-montserrat hover:border-b-2">Contact</a>
                     </div>

                     @guest
                         <div class="space-x-4">
                             <a href="{{ route('login') }}" class="font-didone hover:text-gray-500">Login</a>
                             <a href="{{ route('register') }}"
                                 class="p-2 rounded-lg font-didone hover:text-gray-500">Register</a>
                         </div>
                     @endguest

                     @auth
                         <form action="/logout" method="post">
                             @csrf
                             <button class="font-montserrat hover:text-gray-500" type="submit">Log out</button>
                         </form>
                     @endauth
                 </div>
             </div>
         </nav>

         <div id="home" class="relative w-full h-screen mt-50">
             <img src="{{ asset('img/fondo-homepage.jpg') }}" class="w-full h-full" id="img">
             <div class="absolute inset-0 flex items-center justify-center">
                 <h2 class="text-5xl text-white font-main mt-96">Your event, your style, your choice!
                 </h2>
             </div>
         </div>

         <div id="aboutUs" class="relative flex h-screen">
             <div
                 class="absolute z-30 bottom-32 left-[160px] text-center border border-transparent bg-eventi-gris text-black py-16 px-16 w-2/5">
                 <h2 class="font-main font-semibold text-center text-2xl pb-2.5">Who are we?</h2>
                 <h2 class="text-xl font-didone">Facilitate the process of organizing events and celebrations for
                     Salvadorans by developing an online platform that optimizes the search and contracting of
                     event-related services so that people can save money and customize their events on their own.</h2>
             </div>

             <div class="absolute right-[160px]">
                 <img src="{{ asset('img/imagen restaunate.jpg') }}" class="h-[calc(100vh-96px)] my-12">
             </div>
         </div>

         <div id="misionVision" class="gap-x-10 grid grid-cols-2 h-screen mx-12">
             <div
                 class="col-span-1 text-center border border-transparent bg-eventi-gris text-black my-auto mx-auto p-14">
                 <h2 class="font-main font-semibold text-center text-2xl pb-2.5">Mision</h2>
                 <h2 class="text-xl font-didone">To provide the organized search of services prior to an event or
                     celebration offering diverse services exceeding the expectations of our users.</h2>
             </div>

             <div
                 class="col-span-1 text-center border border-transparent bg-eventi-gris text-black my-auto mx-auto p-14">
                 <h2 class="font-main font-semibold text-center text-2xl pb-2.5">Vision</h2>
                 <h2 class="text-xl font-didone">Innovate in the organization of events such as weddings, birthdays,
                     catering and more, constantly showing excellence by adding new tools constantly and expanding
                     abroad. </h2>
             </div>
         </div>

         <div id="ourServices" class="h-screen bg-">
             <h1 class="py-10 text-2xl font-semibold text-center font-main">Our services</h1>
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
             <h1 class="py-10 text-2xl font-semibold text-center font-main">Client Experiences</h1>
             <div class="grid grid-cols-3 place-items-center">

                 <div class="mx-4 text-black border-2 border-transparent rounded-xl bg-eventi-rosa">
                     <img class="w-10 h-10 mt-4 ml-4 rounded-full" src="{{ asset('img/icon.png') }}">
                     <h1 class="font-didone px-12 pb-8 text-center">"Our product launch was a huge success because of Eventi. Our
                         clients were thrilled with the sleek modern location, the excellent AV setup, and the
                         delectable catering. Their coordinator for the event was really effective. Eventi assisted us
                         in showcasing our brand with precision."</h1>
                 </div>

                 <div class="mx-4 text-black border-2 border-transparent rounded-xl bg-eventi-rosa">
                     <img class="w-10 h-10 mt-4 ml-4 rounded-full" src="{{ asset('img/icon.png') }}">
                     <h1 class="font-didone px-12 pb-8 text-center">"Eventi made our celebration truly memorable. Their attention to
                         detail and
                         professional service exceeded our expectations."</h1>
                 </div>

                 <div class="mx-4 text-black border-2 border-transparent rounded-xl bg-eventi-rosa">
                     <img class="w-10 h-10 mt-4 ml-4 rounded-full" src="{{ asset('img/icon.png') }}">
                     <h1 class="font-didone px-12 pb-8 text-center">"The Eventi website has an excellent design that benefits
                         vendors as well as customers. It was simple for me as a customer to look through locations,
                         weigh services, and make judgments. For vendors, this is a great way to present their products.
                         Everyone's involvement in event preparation is streamlined by the user-friendly design and
                         smooth booking procedure."</h1>
                 </div>

             </div>
         </div>

         <section class="grid grid-cols-3 text-black bg-eventi-azul" id="contacto">

             <img src="{{ asset('img/mainlogo.png') }}" class="w-48 my-auto mx-auto">

             <div class="col-span-1 font-medium font-montserrat">
                 <h1 class="font-didone my-8 text-center px-14">Leave us a comment about our web site</h1>
                 <form action="" method="post" class="flex flex-col mx-16">
                     <input class="w-full h-8 text-black rounded-2xl" />
                     <button
                         class="bg-fika-wisteria w-28 ml-auto rounded-2xl font-medium py-0.5 px-4 font-main text-center text-lg mt-2"
                         type="submit">Send</button>
                 </form>
             </div>

             <div class="col-span-1 ml-8 font-medium font-didone mx-8">
                 <h2 class="mt-12 mb-6">Contacts:</h2>
                 <h2 class="mb-1 text-end">Our phone number</h2>
                 <h2 class="text-end">Our e-mail address</h2>
             </div>
             <div class="col-span-3 mx-4 font-medium border-t border-gray-200 font-main">
                 <h1 class="my-4">Copyright © 2024 Eventi - Privacy - Terms of Use</h1>
             </div>
         </section>
     </div>

     <script>
         document.addEventListener('scroll', () => {
             const navbar = document.getElementById('bar');
             const img = document.getElementById('img');
             const logo = document.getElementById('logo');

             if (window.scrollY > (img.getBoundingClientRect().height - 50)) {
                 navbar.classList.remove('text-white');
                 logo.src = "{{ asset('img/mainlogo.png') }}";
             } else {
                 navbar.classList.add('text-white');
                 logo.src = "{{ asset('img/whiteLogo.png') }}";
             }
         })
     </script>
 </x-layout>
