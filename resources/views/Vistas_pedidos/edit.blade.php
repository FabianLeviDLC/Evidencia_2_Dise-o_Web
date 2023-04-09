@extends('layouts.app')

@section('content')
<div class="container">

    Formulario de Edit

<form action="{{url('/Vistas_pedidos/'.$pedido->id)}}" method="post">
    @csrf
    
    {{method_field('PATCH')}}
    @include('Vistas_pedidos.form')
   
   </form>
   
</div>
@endsection