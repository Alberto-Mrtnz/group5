@props(['titulo', 'valor'])

<div class="font-main">
    <label class="container text-lg">{{ $titulo }}
        <input type="radio" value="{{$valor}}" {{$attributes}}>
    </label>
</div>
