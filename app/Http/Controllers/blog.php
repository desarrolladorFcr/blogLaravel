<?php

namespace blog\Http\Controllers;

use Illuminate\Http\Request;
use blog\Http\Requests;
use blog\ciudad;
use blog\Country;
use blog\Ciudadanos;
use blog\Telefonos;
use blog\Post_yii;
use blog\Categorias;
use \Illuminate\Support\Facades\DB;

class blog extends Controller {
    

    public function verBlogs() {

        $blogs = Post_yii::paginate(5);
        return view('mostblrg', ['titulo' => 'Los blogs', 'blogs' => $blogs]);
    }

    public function crearBlog() {
        
        $categorias = Categorias::all();

        return view('crearBlog', ['titulo' => 'Crear Blog', 'categorias'=>$categorias]);
    }

    public function guardarBlog(Request $request) {
        
        $this->validate($request,[
            'titulo'=>'required',
            'contenido' => 'required',
            'categorias'=>'required'
        ]);
        
        $dia = Date('Y-m-d');
        $id = DB::table('post_yii')->max('idpost_yii')+1;
        
       DB::table('post_yii')->insert([
            'idpost_yii'=>$id,
            'contenido_post'=>$request->input('contenido'), 
            'titulo_post' => $request->input('titulo'),
            'fecha_post' => $dia 
        ]);
       
        $neoBlog = Post_yii::find($id);
        
        $array_cat = $request->input('categorias');
       
        foreach ($array_cat as $cat){
            $neoBlog->categorias()->attach($cat);
        }
        
        return redirect('/varBlog');
    }

    public function actualizarBlog(Request $request) {
        
        $categorias = Categorias::all();
        $blog = Post_yii::where('idpost_yii', $request->input('blog'))->get();
        return view('actualizacion', ['blog' => $blog, 'categorias' => $categorias]);
    }
    
    
    public function actualizando(Request $request){
        
        $this->validate($request, [
           'titulo' => 'required',
           'contenido' => 'required',
            'categorias' => 'required'
            
        ]);
        
        $dia = Date('Y-m-d');
        $categorias = $request->input('categorias');
        $blog = Post_yii::find($request->input('id'));
        $blog->contenido_post=$request->input('contenido');
        $blog->titulo_post=$request->input('titulo');
        $blog->fecha_post=$dia;
        $blog->save();
            
        $blogCategorias = $blog->categorias;
        
//        print_r($blogCategorias); die();
        foreach ($blogCategorias as $cat){
            
            $blog->categorias()->detach($cat->idcategorias);
        }
        
        foreach ($categorias as $cat){
            
            $blog->categorias()->attach($cat);
        }
                

        return redirect('/varBlog');
    }
    
    /*
     * Con la siguiente función se elimina el post
     * como hay una relación de muchos a muchos
     * primero se eliminan estas, si las hay. posteriormente
     * eliminamos el post
     */

    public function eliminarBlog(Request $request ) {
        
        $idBlog= $request->input('eliminar');
        $categorias = json_decode($request->input('categorias'));
        $blog = Post_yii::find($idBlog);
       
        foreach($categorias as $cat){
            
            $blog->categorias()->detach($cat->idcategorias);
        }
    
        Post_yii::destroy($idBlog);
        
        return redirect('/varBlog');
    }
    
    
/*
 * Código propiedad de Felipe Cifuentes R
 */

    
}
