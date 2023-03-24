@extends('layouts.app')

@section('content')
<div class="container">


<a href="{{url('/Vistas_heroes/create')}}" class="btn btn.success"> Agregar nuevo Heroe</a>
<br>
<br>
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

             <a href="{{url('/Vistas_heroes/'.$heroe->id.'/edit')}}" class="btn btn.warnig"> editar</a>
                
             <form action="{{url('/Vistas_heroes/'.$heroe->id)}}" class="d-inline" method="post" >
                @csrf
                
                {{method_field('DELETE')}}
                <input class="btn btn.danger" type="submit"  onclick="return confirm('¿Quieres borrar?')" value="Borrar" >
                
            </form>
             
              </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
