<?php

namespace blog;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    
    protected $table = 'categorias';
    protected $primaryKey='idcategorias';
    protected $fillable=['nombre_categoria', 'descripcion_categoria'];
    
    public function posts(){
        
        return $this->belongsToMany('blog\Post_yii', 'posts_categorias');
    }
}
