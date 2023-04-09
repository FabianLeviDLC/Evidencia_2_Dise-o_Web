@extends('layouts.app')

@section('content')
<div class="container">


<a href="{{url('/Vistas_pedidos/create')}}" class="btn btn.success"> Agregar nuevo Producto</a>
<br>
<br>
<div class="table-responsive">
<table class="table table-ligth">
        <thead class="table-ligth">
            <tr>
                <th>id</th>
                <th>IdProducto</th>
                <th>Cantidad</th>
                <th>PrecioUnitario</th>
                <th>PrecioTotal</th>
                <th>Estatus</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Vistas_pedidos as $pedido) 
            <tr>
             <td>{{$pedido->id}}</td>
             <td>{{$pedido->IdProducto}}</td>
             <td>{{$pedido->Cantidad}}</td>
             <td>{{$pedido->PrecioUnitario}}</td>
             <td>{{$pedido->PrecioTotal}}</td>
             <td>{{$pedido->Estatus}}</td>
             <td>

             <a href="{{url('/Vistas_pedidos/'.$pedido->id.'/edit')}}" class="btn btn.warnig"> editar</a>
                
             <form action="{{url('/Vistas_pedidos/'.$pedido->id)}}" class="d-inline" method="post" >
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
