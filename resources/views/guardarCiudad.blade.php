@extends('layouts.app')
@section('titulo', 'nuevaCiudad')
@section('content')
@include('common.errors')

<form action="/guardadCiudad" class="form" method="post">
    
    {{csrf_field()}}
    
    <input name="nombre" placeholder="nombre" class="form-control">
    <select name="idpais" class="input-group" class="form-control">
        @foreach($paises as $pais)
            <option value="{{$pais->id_pais}}">
                {{$pais->nombre}}
            </option>
        @endforeach    
    </select>
    <input type="submit" value="ENVIAR">
</form>
@endsection

