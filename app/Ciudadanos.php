<?php

namespace blog;

use Illuminate\Database\Eloquent\Model;

class Ciudadanos extends Model
{
    protected $table ='ciudadano';
    protected $primaryKey='ciudadano_id';
    protected $fillable= ['cedula','nombre_ciu'];
    public $timestamps = false;
    

    public function telefono(){
        
        return $this->hasOne('blog\Telefonos',$this->primaryKey);
    }
}
