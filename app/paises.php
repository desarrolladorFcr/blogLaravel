<?php

namespace blog;

use Illuminate\Database\Eloquent\Model;

class paises extends Model
{
    protected $table = 'paises';
    protected $primaryKey = 'id_pais';
    protected $fillable =['cod_pais','descripcion','nombre'];
    public $timestamps=false;
    
    public function ciudades(){
        
        return $this->hasMany('blog\ciudades', $this->primaryKey);
    }
}
