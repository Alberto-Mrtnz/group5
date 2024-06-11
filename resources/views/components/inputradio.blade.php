@props(['titulo', 'valor'])

<div class="font-montserrat text-center ml-14 mt-4">
    <label class="container font-medium text-xl">{{ $titulo }}
        <input type="radio" value="{{$valor}}" {{$attributes}}>
    </label>
</div>
