@props(['titulo','type','nombre'])

<label for="" class="font-a">{{$titulo}}</label>
<input type={{$type}} name={{$nombre}}>

@error($nombre)
<p>{{$message}}</p>
@enderror