@extends('layouts.app')
@section('titulo', 'ciudades')
@section('content')

<table class="table table-bordered">
    <tr>
        <th>PAIS</th>
        <th>DESCRIPCIÓN</th>
        <th>CIUDADES</th>
    </tr>
    @foreach($paises as $pais)
    <tr>
        <td>{{$pais->nombre}}</td>
        <td>{{$pais->descripcion}}</td>
        <td>
            @foreach($pais->ciudades as $ciudad)
             <li>
                {{$ciudad->nombre}}
             </li>
            @endforeach
  
        </td>
        <td>
              <form action="/verGuardar" >
                <input href="#" value="agregar ciudad" type="submit"> 
              </form>
        </td>
        <td>
            <form action="/verEliminar">
                <input type="hidden" value="{{$pais->id_pais}}" name="idpais">
                <input value="eliminar" type="submit">
            </form>
        </td>

    </tr>
@endforeach
</table>

{!!$paises->render()!!}
@endsection

