<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{ isset($persona->Nombre)?$persona->Nombre:'' }}" id="Nombre">
<br>

<label for="Apellido"> Apellido </label>
<input type="text" name="Apellido" value="{{ isset($persona->Apellido)?$persona->Apellido:'' }}" id="Apellido">
<br>

<input type="submit" value="{{$modo}} datos">

<a href="{{ url('Personas/') }}"> Atras </a>
<br>