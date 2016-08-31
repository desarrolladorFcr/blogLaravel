<?php

namespace blog;

use Illuminate\Database\Eloquent\Model;

class Post_yii extends Model
{
    protected $table = 'post_yii';
    protected $primaryKey='idpost_yii';
    protected $fillable=['contenido_post','titulo_post','fecha_post'];
    public $timestamps = false;


    public function categorias(){
      
        return $this->belongsToMany('blog\Categorias', 'posts_categorias', $this->primaryKey, 'idcategorias');
    }
}
