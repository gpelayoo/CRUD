

<form action="{{ url('/Personas') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('Personas.form',['modo'=>'Crear']);
</form>