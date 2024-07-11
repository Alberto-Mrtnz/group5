<x-layout>
    <div>
        <div x-data="{opened: false}" >
            <nav class="z-20 w-full grid-cols-2 py-0 text-black bg-fika-pink ">
                <div class="inline-flex w-full">
                    <x-buttonicon2></x-buttonicon2>
                        <div class="z-30 py-2 pl-14">
                            <img class="w-10 h-10 rounded-full" src="{{ asset('img/persona2.jpg') }}">
                        </div>
                        <h1 class="z-30 flex-grow px-2 py-2 text-3xl text-black font-moon">FIKA</h1>
                        <div class="px-3 py-2">
                            <img class="justify-end w-10 h-10 rounded-full " src="{{ asset('img/persona2.jpg') }}">
                        </div>
<!-- barra verticla -->
    <div x-show="opened" class="fixed left-0 z-20 flex flex-col items-center justify-start h-screen pt-5 bg-white w-96 top-14">
        <div class="w-full ml-6">
            <button class="p-2 py-8 mt-2 text-2xl font-medium text-center text-white rounded-lg bg-fika-black px-14 font-montserrat">
            <p>Servivios habilitados</p>
             </button>
        </div>

        <div class="w-full ml-6">
             <button class="p-2 px-32 py-8 mt-4 text-2xl font-medium text-center text-white rounded-lg bg-fika-black font-montserrat">
            <p>Reseñas    </p>
             </button>
         </div>

        <div class="w-full ml-6">
            <button class="p-2 py-8 mt-4 text-2xl font-medium text-center text-white rounded-lg bg-fika-black px-28 font-montserrat">
            <p>Calendario</p>
            </button>

        </div>

        <div class="w-full ml-6">
            <button class="p-2 py-8 mt-4 text-2xl font-medium text-center text-white rounded-lg bg-fika-black px-36 font-montserrat">
             <p>Inicio</p>
            </button>
        </div>

        <div class="w-full px-2 py-5">
            <button>
            <svg class="grid rounded-full justify-items-start size-10 hover:bg-fika-brown" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
            </button>
        </div>
    </div>
</nav>

        <div class="grid grid-cols-3">
            <div class="col-span-1 py-16">
                <img class="w-64 mx-12 rounded-full" src="{{ asset('img/icon.png') }}">
            </div>
            <div class="col-span-2 py-">
                <h1 class="text-2xl font-montserrat my-14">Nombre de usuario</h1>
                <x-buttom class="py-10">Tipos de eventos</x-buttom>
                <h1 class="text-2xl font-montserrat">Descripión</h1>
            </div>
        </div>

            <x-event id="3" title="asdba" description="asdd"/>
        <div>
    </div>
</x-layout>
