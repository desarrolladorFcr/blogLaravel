@extends('layouts.app')

@section('titulo', 'Actualizar')

@section('content')

@include('common.errors')
@foreach($blog as $bl)

<form action="/actualizando" method="POST" class="form">

    {!! csrf_field() !!}

    <div class="form-group form-horizontal">
        <label>TITULO</label>

        <input type="hidden" value="{{$bl->categorias}}" id="categoriasBlog" class=" form-control">
        <input type="hidden" value="{{$bl->idpost_yii}}" name="id" class=" form-control">
        <input type="text" value="{{$bl->titulo_post}}" name='titulo' class=" form-control">
    </div>

    <div class="form-horizontal form-group" >
        <label>CONTENIDO</label>
        <textarea name="contenido" class=" form-control">{{$bl->contenido_post }}</textarea>
    </div>
    <div>
        @foreach($categorias as $cat)
        <input name="categorias[]" type="checkbox" value="{{$cat->idcategorias}}" id="{{$cat->idcategorias}}" /> 
        {{$cat->nombre_categoria}} <br>
        @endforeach 

    </div>
    <button type="submit" class="btn-danger">ACTUALIZAR </button>

</form>

<script src="{{asset('js/funcionesActualizar.js')}}"></script>
@endforeach

@endsection