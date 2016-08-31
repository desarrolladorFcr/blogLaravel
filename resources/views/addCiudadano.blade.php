@extends('layouts.app')

@section('titulo', 'Ciudadano')
@section('content')
<h3>
    {{$titulo}}
</h3>

@include('common.errors')

<form method="POST" action="/guardarCiudadano" class="form">
    {{csrf_field()}}
    
    <input type="text" name="nombre" placeholder="NOMBRE" class="form-control"> <br>
    <input type="text" name="cedula" placeholder="CÉDULA" class="form-control"> <br>
    <input type="text" name="telefono" placeholder="TELÉFONO" class="form-control"> <br>
    <button type="submit" class="btn-danger"> ENVIAR</button>
</form>
@endsection