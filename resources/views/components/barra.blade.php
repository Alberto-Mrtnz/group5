<div x-data="{ opened: false }" class="sticky top-0 z-40">
    <nav class="z-40 w-full bg-[#063254] sticky top-0 backdrop-[2px]">
        <div class="flex justify-between w-full items-center">
            <img src="{{ asset('img/whiteLogo.png') }}" class="w-20 ml-16 mt-2">

            <div class="px-3 py-2">
                <a href="/userprofile">
                    <img class="justify-end w-10 h-10 rounded-full" src="{{ asset('img/icon.png') }}">
                </a>
            </div>

            <x-hamburguer/>

            <div x-show="opened"
                class="fixed left-0 z-20 flex flex-col items-center justify-start h-screen pt-5 bg-white w-96 top-14 font-didone">

                    <div class="w-full my-4">
                        <a href="{{ route('welcome') }}"
                           class="p-2 py-8 mt-4 text-2xl font-medium text-center text-black rounded-lg bg-fika-piel
                           px-36 font-montserrat hover:bg-[#df9660]">
                            <button>
                                Welcome
                            </button>
                        </a>
                    </div>

                    <div class="w-full my-4">
                        <a href="{{ route('home') }}"
                           class="p-2 py-8 mt-4 text-2xl font-medium text-center text-black rounded-lg bg-fika-piel
                                px-40 font-montserrat hover:bg-[#df9660]">
                            <button>
                                Home
                            </button>
                        </a>
                    </div>

                    <div class="w-full my-4">
                        <a href="{{ route('profile') }}"
                           class="p-2 py-8 mt-4 text-2xl font-medium text-center text-black rounded-lg bg-fika-piel
                                px-28 font-montserrat hover:bg-[#df9660]">
                            <button>
                                Event boards
                            </button>
                        </a>
                    </div>

                    <!--<div class="w-full px-2 py-64">
                        <button>
                            <svg class="grid rounded-full justify-items-start size-10 hover:bg-fika-sand"
                                xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                                fill="#000000">
                                <path
                                    d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                            </svg>
                        </button>
                    </div>-->
            </div>
        </div>
    </nav>
</div>
