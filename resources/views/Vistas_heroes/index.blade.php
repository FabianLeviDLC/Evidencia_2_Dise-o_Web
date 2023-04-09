@extends('layouts.app')

@section('content')
<div class="container">


<a href="{{url('/Vistas_heroes/create')}}" class="btn btn.success"> Agregar nuevo Producto</a>
<br>
<br>
<div class="table-responsive">
<table class="table table-ligth">
        <thead class="table-ligth">
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Foto</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Vistas_heroes as $heroe) 
            <tr>
             <td>{{$heroe->id}}</td>
             <td>{{$heroe->Nombre}}</td>
             <td>{{$heroe->Descripcion}}</td>

             <td>
                <img src="{{ asset('storage').'/'.$heroe->Foto}}" alt="">
            </td>
            
             <td>{{$heroe->Precio}}</td>
             <td>{{$heroe->Stock}}</td>
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
