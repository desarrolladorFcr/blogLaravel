@extends('layouts.app')

@section('content')

@foreach($pais as $p)
Ciudades de {{$p->nombre}}
<form action="/eliminarCity" method="post">
    
    {{csrf_field()}}
    
    <select name="idcity">
        @foreach($p->ciudades as $ciu)
        
        <option value="{{$ciu->id_ciudades}}">{{$ciu->nombre}} </option>
        @endforeach
    </select>
    <input type="submit" value="Eliminar">
</form>

@endforeach
@endsection
