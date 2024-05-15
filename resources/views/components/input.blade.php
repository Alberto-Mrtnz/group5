@props(['titulo'])

<div class="my-4 font-montserrat">
    <label for="" class="font-medium block mb-2">{{ $titulo }}</label>
    <input class="box-content h-6 w-80 rounded-lg p-1 italic" {{ $attributes }} placeholder="Enter your information">

    @error('{{ $attributes["name"] }}')
        <p>{{ $message }}</p>
    @enderror
</div>
