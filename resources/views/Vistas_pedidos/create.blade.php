
@extends('layouts.app')

@section('content')
<div class="container">

Formulario de Create

<form action="{{url('/Vistas_pedidos')}}" method="post">
 @csrf
@include('Vistas_pedidos.form')

</form>

</div>
@endsection