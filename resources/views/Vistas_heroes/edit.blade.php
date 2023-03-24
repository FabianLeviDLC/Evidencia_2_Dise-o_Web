
<form action="{{url('/Vistas_heroes/'.$heroe->id)}}" method="post">
    @csrf
    
    {{method_field('PATCH')}}
    @include('Vistas_heroes.form')
   
   </form>