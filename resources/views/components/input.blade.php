@props(['titulo'])

<div class="my-4">
    <label for="" class="font-medium block mb-2">{{ $titulo }}</label>
    <input class="box-content h-6 w-80 rounded-lg p-1" {{ $attributes }} placeholder="Enter your information">

    @error('{{ $attributes["name"] }}')
        <p>{{ $message }}</p>
    @enderror
</div>
