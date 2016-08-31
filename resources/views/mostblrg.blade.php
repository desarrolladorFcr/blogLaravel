@extends('layouts.app')

@section('titulo', 'blogs')

@section('content')

<h1> {!!$titulo!!} </h1>

<table class="table table-striped table-bordered">
    <tr>
        <th>
            TITULO POST
        </th>
        <th>
            CONTENIDO
        </th>
        <th>
            CATEGORIAS
        </th>
        <th>
            FECHA
        </th>
        <th>

        </th>
        <th>

        </th>
    </tr>
    @foreach($blogs as $blog)
    <tr>
        <td>
            {{$blog->titulo_post}}
        </td>
        <td>
            {{$blog->contenido_post}}
        </td>
        <td>
            <ul>
                @foreach($blog->categorias as $cat)
                <li>
                    {{$cat->nombre_categoria}}
                </li>
                @endforeach
            </ul>
        </td>
        <td>
            {{$blog->fecha_post}}
        </td>
        <td>
            <form method="post" action="/eliminacion">

                {!! csrf_field() !!}
                <input type="hidden" value="{{$blog->idpost_yii}}" name="eliminar">
                <input type="hidden" value="{{$blog->categorias}}" name='categorias'>
                <button type="submit" class="btn-danger glyphicon glyphicon-trash" >
                </button>
            </form>
        </td>
        <td>
            <form action="/actualizar">
                <input type="hidden" value="{{$blog->idpost_yii}}" name="blog">
                <button type="submit" class="btn-danger glyphicon glyphicon-pencil"> 
                </button>
            </form>
        </td>
        @endforeach
    </tr>
</table>

{!!$blogs->render()!!}
<form action="crear">
    <input type="submit" value="CREAR" class="btn-danger">
</form>

@endsection


