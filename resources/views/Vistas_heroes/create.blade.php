@extends('layouts.app')

@section('content')
<div class="container">


<form action="{{url('/Vistas_heroes')}}" method="post">
 @csrf
@include('Vistas_heroes.form')

</form>

</div>
@endsection