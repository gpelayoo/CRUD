
<form action="{{ url('/Personas/'.$persona->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}
@include('Personas.form',['modo'=>'Editar']);

</form>