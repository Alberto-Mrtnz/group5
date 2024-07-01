<x-layout>
    <div>
        <div x-data="{opened: false}" >
            <nav class="w-full bg-gray-300 grid-cols-2 py-0 z-20">
                <div class="inline-flex w-full">
                    <x-buttonicon2></x-buttonicon2>
                        <div class="py-2 pl-14 z-30">
                            <img class="h-10 w-10 rounded-full" src="{{ asset('img/persona2.jpg') }}">
                        </div>
                        <h1 class="text-3xl font-moon flex-grow text-black py-2 px-2 z-30">FIKA</h1>
                        <div class="py-2 px-3">
                            <img class=" justify-end h-10 w-10 rounded-full" src="{{ asset('img/persona2.jpg') }}">
                        </div>
<!-- barra verticla -->
                        <div x-show="opened" class="pt-20 flex flex-col fixed w-96 h-screen top-0 left-0 justify-start items-center bg-gray-300 z-20">
                            <button class="bg-gray-500 py-8 rounded-lg font-medium p-2  mt-11 font-montserrat text-2xl text-center">
                                <p>Servicios habilitados</p>
                            </button>
                </div>
            </nav>
        </div>

        <div class="grid grid-cols-3">

            <div class="col-span-1 py-16">
                <div class="pl-8"> <img class="w-64 rounded-full mb-" src="{{ asset('img/icon.png') }}"></div>
            </div>

            <div>
                <buttonicon></buttonicon>
            </div>

        </div>
            <x-event/>
        <div>

        </div>
    </div>
</x-layout>
