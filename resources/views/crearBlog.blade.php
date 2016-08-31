@extends('layouts.app')

@section('titulo', 'blogs')

@section('content')
@section('titulo', 'Neo blog')
@include('common.errors')

<h1> <?php echo $titulo ?></h1>

<form action="{{url("/guardar")}}" method="post" class="form" >

    {{csrf_field()}}
    
        <label for="titulo" > Titulo </label>
        <input type="text" id="titulo" name="titulo" class=" form-control"> <br>
   
        <label for="contenido" > Contenido</label>
        <textarea name="contenido" class=" form-control"></textarea> <br>
 
    
    @foreach($categorias as $cat)
    <input type="checkbox" value="{{$cat->idcategorias}}" name="categorias[]" id="{{$cat->nombre_categoria}}">
    {{$cat->nombre_categoria}} <br> 
    @endforeach
    
    <input type="submit" value="Enviar" class="btn-danger">
</form>
@endsection
