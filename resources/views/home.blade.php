<x-layout>
    <div class="relative" x-data="data">
        <x-barra/>
        <!-- buscador -->

        <label class="block px-20 pt-5">
            <span class="sr-only">Search</span>
            <span class="absolute inset-y-0 left-0 flex items-center">
                <svg class="w-5 h-5 fill-slate-300" viewBox="0 0 20 20"></svg>
            </span>
            <div class="inline-flex w-full grid-cols-2">
                <input x-model="search"
                    class="justify-end block w-full col-span-1 py-2 bg-white border rounded-full shadow-sm placeholder:text-slate-400 font-didone border-slate-300 pl-9 focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
                    placeholder="Search..." type="text" name="search" />
                <button type="submit"
                    class="p-2.5 ms-2 text-sm font-medium text-white shadow-sm bg-white rounded-full border border-slate-300 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#5f6368">
                        <path
                            d="M375.48-307q-114.09 0-193.55-79.46-79.45-79.45-79.45-193.54 0-114.09 79.45-193.54Q261.39-853 375.48-853q114.09 0 193.54 79.46 79.46 79.45 79.46 193.54 0 45.13-12.87 83.28T601-429.7l219.48 220.05q14.96 15.52 14.96 37.32 0 21.81-15.53 36.77-14.95 14.95-37.04 14.95t-37.04-14.95L526.91-354.48q-29.43 21.74-68.15 34.61Q420.04-307 375.48-307Zm0-106q69.91 0 118.45-48.54 48.55-48.55 48.55-118.46t-48.55-118.46Q445.39-747 375.48-747t-118.46 48.54Q208.48-649.91 208.48-580t48.54 118.46Q305.57-413 375.48-413Z" />
                    </svg>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" /></span>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </label>

        <div>
            <!-- categorias -->
            <div class="flex items-center justify-center mx-6">
                <template x-for="category in categories">
                    <button x-on:click="selectedCategory = category.id" class="font-main text-lg font-medium px-1 pt-4 transition duration-300 ease-in-out delay-150 hover:-translate-y-1 hover:scale-5">
                        <div :class="selectedCategory === category.id ? 'inline-flex items-center px-2 py-2 text-black rounded-full border-[#64a1b9] border-2 hover:bg-[#64a1b9] font-montserrat bg-[#64a1b9] ' : 'inline-flex items-center px-2 py-2 text-black rounded-full border-[#64a1b9] border-2 hover:bg-[#64a1b9] font-montserrat'">
                            <span class="px-1" x-text="category.name"></span>
                        </div>
                    </button>
                </template>

                <button x-on:click="selectedCategory = null" class="font-main text-lg font-medium px-1 pt-4 transition duration-300 ease-in-out delay-150 hover:-translate-y-1 hover:scale-5">
                    <div class="inline-flex items-center px-3 py-2 text-black rounded-full border-[#64a1b9] border-2 hover:bg-[#64a1b9] font-montserrat">
                        <span class="px-2">Reset filter</span>
                    </div>
                </button>
            </div>

            <!-- tarjeta -->
            <div class="grid grid-cols-3 mb-12">
                <template x-for="supply in filteredSupplies">
                    <a :href="`/service/${supply.id}`">
                        <div class="pt-6 pr-6 pl-9">
                            <div class="max-w-sm overflow-hidden transition duration-300 ease-in-out delay-150 rounded-lg shadow-lg bg-gray-200 hover:-translate-y-1 hover:scale-1">
                                <img class="m-6 rounded-lg w-min size-56 w-max-full mx-auto px-2" :src="`/img/supplies/${supply.img}`">
                                <div class="px-1 py-1">
                                    <div class="mb-2 font-bold font-main text-xl text-center" x-text="supply.name"></div>
                                    <p class="text-base font-didone text-center text-gray-700" x-text="supply.description"></p>
                                </div>
                                <div class="inline-flex justify-end w-full px-6 pt-2 pb-2 ">
                                    <svg class="rounded-lg hover:bg-gray-400 size-8" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1F1A37"><path d="M200-120v-640q0-33 23.5-56.5T280-840h400q33 0 56.5 23.5T760-760v640L480-240 200-120Zm80-122 200-86 200 86v-518H280v518Zm0-518h400-400Z"/></svg>
                                    <svg class="rounded-lg hover:bg-gray-400 size-8" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1F1A37"><path d="M520-400h80v-120h120v-80H600v-120h-80v120H400v80h120v120ZM320-240q-33 0-56.5-23.5T240-320v-480q0-33 23.5-56.5T320-880h480q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H320Zm0-80h480v-480H320v480ZM160-80q-33 0-56.5-23.5T80-160v-560h80v560h560v80H160Zm160-720v480-480Z"/></svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </template>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('data', () => ({
                search: '',
                selectedCategory: null,
                categories: {!! json_encode($categories) !!},
                supplies: {!! json_encode($supplies) !!},

                get filteredSupplies() {
                    return this.supplies.filter(
                        s => s.name.toLowerCase().includes(this.search.toLowerCase())
                    ).filter(
                        s => s.category_id === this.selectedCategory || this.selectedCategory == null
                    )
                },
            }))
        })
    </script>
</x-layout>
