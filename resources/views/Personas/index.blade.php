<a href="{{ url('Personas/create') }}"> Crear un nuevo registro </a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($personas as $persona)
        <tr>
            <td>{{ $persona->id }}</td>
            <td>{{ $persona->Nombre }}</td>
            <td>{{ $persona->Apellido }}</td>
            <td>
                <a href="{{ url('/Personas/'.$persona->id.'/edit') }}"> Editar </a> 
                |
                <form action="{{ url('/Personas/'.$persona->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Desea eliminar este registro?')" value="Eliminar">
                </form> 
            </td>   
        </tr>
        @endforeach
    </tbody>
</table>