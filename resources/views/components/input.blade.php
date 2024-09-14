@props(['titulo'])

<div class="my-4 font-main text-lg">
    <label for="" class="block mb-2 font-medium">{{ $titulo }}</label>
    <input class="box-content h-6 p-1 italic bg-gray-200 rounded-lg w-80" {{ $attributes }} placeholder="Enter your information">

    @error($attributes["name"])
        <p>{{ $message }}</p>
    @enderror
</div>
