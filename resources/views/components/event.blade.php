@props(['title', 'description'])

    <button>
    <div class="pt-6 pr-6 pl-9">
        <div class="max-w-sm overflow-hidden transition duration-300 ease-in-out delay-150 rounded-lg shadow-lg bg-fika-piel hover:-translate-y-1 hover:scale-1">
            <img class="m-6 rounded-lg w-min size-56" src="/img/home.jpeg">
            <div class="px-1 py-1">
              <div class="mb-2 text-xl font-bold">{{$slot}}</div>
              <p class="text-base text-black">
                {{$slot}}
              </p>
            </div>
            <div class="inline-flex justify-end w-full px-6 pt-2 pb-2 ">
                <svg class="rounded-lg hover:bg-gray-400 size-8" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1F1A37"><path d="M200-120v-640q0-33 23.5-56.5T280-840h400q33 0 56.5 23.5T760-760v640L480-240 200-120Zm80-122 200-86 200 86v-518H280v518Zm0-518h400-400Z"/></svg>
                <svg class="rounded-lg hover:bg-gray-400 size-8" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1F1A37"><path d="M520-400h80v-120h120v-80H600v-120h-80v120H400v80h120v120ZM320-240q-33 0-56.5-23.5T240-320v-480q0-33 23.5-56.5T320-880h480q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H320Zm0-80h480v-480H320v480ZM160-80q-33 0-56.5-23.5T80-160v-560h80v560h560v80H160Zm160-720v480-480Z"/></svg>
            </div>
          </div>
    </div>
    </button>
