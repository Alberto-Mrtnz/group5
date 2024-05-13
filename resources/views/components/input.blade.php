@props(['titulo','type','nombre'])

<label for="" class="font-medium">{{$titulo}}</label>
<input class="box-content h-6 w-80 rounded-lg p-1"
type={{$type}} name={{$nombre}} 
placeholder="Enter your information">

@error($nombre)
<p>{{$message}}</p>
@enderror