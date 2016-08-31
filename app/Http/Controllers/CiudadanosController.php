<?php

namespace blog\Http\Controllers;

use Illuminate\Http\Request;
use blog\Http\Requests;
use blog\Ciudadanos;
use blog\Telefonos;

class CiudadanosController extends Controller {

    public function mostrarCiudadanos() {

        $blogs = Ciudadanos::paginate(5);

        return view('verBlogs', ['titulo' => 'CIUDADANOS', 'blogs' => $blogs]);
    }

    public function verCrear() {

        return view('addCiudadano', ['titulo' => 'Crear Ciudadano']);
    }

    public function addCiudadanos(Request $request) {
        
        $this->validate($request, [
            'nombre' => 'required|string',
            'cedula' => 'required|numeric',
            'telefono'=>'required|numeric'
        ]);

        $ciudadano = Ciudadanos::create([
                    'cedula' => $request->input('cedula'),
                    'nombre_ciu' => $request->input('nombre'),
        ]);

        $tel = Telefonos::create([
                    'numero_tel' => $request->input('telefono'),
                    'ciudadano_id' => $ciudadano->ciudadano_id
        ]);

        return redirect('/');
    }
    
    public function remove(Request $request){
       
        $ciudadano = Ciudadanos::find($request->input('idciudadano'));
        Telefonos::destroy($ciudadano->telefono->telefono_id);
        Ciudadanos::destroy($ciudadano->ciudadano_id);
        
        return redirect('/');
    }

}
