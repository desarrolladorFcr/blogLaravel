@extends('layouts.app')

@section('titulo', 'blogs')

@section('content')
@include('layouts.btnVolverInicio')
<h1> <?php echo $titulo; ?></h1>

<?php // print_r($blogs);die()?>
<table class="table table-striped table-bordered" >
    <tr>
        <th>
            ciudadano
        </th>
        <th>
            nombre
        </th>
        <th>
            teléfono
        </th>
        <th>
           
        </th>
    </tr>

    @foreach($blogs as $blog)
    <tr>
        <td>
            {{ $blog->cedula}}
        </td>
        <td>
            {{$blog->nombre_ciu}}
        </td>
        <td>
            {{$blog->telefono->numero_tel }}
        </td>
        <td>
            
            <form action="/remove" method="POST">
                {{csrf_field()}}
                <button type="submit" class="glyphicon glyphicon-trash"> </button> 
                <input type="hidden" value="{{$blog->ciudadano_id}}" name="idciudadano"> 
            </form>
            
        </td>
    </tr>
    @endforeach
</table>

{!!$blogs->render()!!}

<br>
<br>
<form action="/crearCiudadano">
    <button type="submit" class="btn-danger"> Crear Ciudadano</button>
</form>
<br>
<br>
<form action="/varBlog">
    <input type="submit" value="Mostrar los blogs" class="btn-success">
</form>
<br>
<br>
<form action="/ciudades">
    <input type="submit" value="Mostrar ciudades" class="btn-success">
</form>

@endsection