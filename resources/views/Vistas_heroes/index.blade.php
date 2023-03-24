
<a href="{{url('/Vistas_heroes/create')}}"> Agregar nuevo Heroe</a>
<div class="table-responsive">
<table class="table table-ligth">
        <thead class="table-ligth">
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Super_Nombre</th>
                <th>Info_Extra</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Vistas_heroes as $heroe) 
            <tr>
             <td>{{$heroe->id}}</td>
             <td>{{$heroe->Nombre}}</td>
             <td>{{$heroe->Super_Nombre}}</td>
             <td>{{$heroe->Info_Extra}}</td>
             <td>

             <a href="{{url('/Vistas_heroes/'.$heroe->id.'/edit')}}"> editar</a>
                
             <form action="{{url('/Vistas_heroes/'.$heroe->id)}}" method="post">
                @csrf
                
                {{method_field('DELETE')}}
                <input type="submit"  onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                
            </form>
             
              </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>
