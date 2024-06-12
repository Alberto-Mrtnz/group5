@props(['title', 'description'])

<div class="pl-9 pr-6 pt-6">
    <div class="max-w-sm rounded shadow-lg">
        <img class="w-full" src="/img/home.jpeg">
        <div class="px-1 py-1">
            <div class="font-bold text-xl mb-2">{{ $title }}</div>
            <p class="text-gray-700 text-base">
                {{ $description }}
            </p>
        </div>
        <div class="px-2 pt-2 pb-2">
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#birthday</span>
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#event</span>
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#elegant</span>
        </div>
    </div>
</div>
