
@extends('layouts.app')

@section('content')
<div class="container">

Formulario de Create

<form action="{{url('/Vistas_heroes')}}" method="post">
 @csrf
@include('Vistas_heroes.form')

</form>

</div>
@endsection