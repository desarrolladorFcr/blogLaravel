<?php

namespace blog\Http\Controllers;

use Illuminate\Http\Request;

use blog\Http\Requests;
use blog\ciudades;
use blog\paises;

class CiudadController extends Controller
{
    public function mostrar(){
        
        $paises = paises::paginate(5);
        
        return view('verCity', ['paises'=>$paises]);
    }
    
    public function verGuardar(){
        
        $paises = paises::all();
        return view('guardarCiudad',['paises'=>$paises]);
    }


    public function guardadCiudad(Request $request){
        
        $this->validate($request,[
            'nombre'=>'required|max:59',
            'idpais'=>'required'
        ]);
        
        ciudades::create(['nombre'=>$request->input('nombre'),
            'id_pais'=>$request->input('idpais')]);
       
        return redirect('/ciudades');
    }
    
    public function verEliminar(Request $request){
        
        $pais = paises::where('id_pais', $request->input('idpais'))->get();
        return view('eliminarCiudad',['pais'=>$pais]);
    }
    
    public function eliminarCity(Request $request){
        
        $idCiudad = $request->input('idcity');
        
        ciudades::destroy($idCiudad);
        return redirect('/ciudades');
    }
}
