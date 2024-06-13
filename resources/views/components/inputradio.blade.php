@props(['titulo', 'valor'])

<div class="text-center font-montserrat">
    <label class="container text-lg">{{ $titulo }}
        <input type="radio" value="{{$valor}}" {{$attributes}}>
    </label>
</div>
