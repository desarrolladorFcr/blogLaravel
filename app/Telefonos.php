<?php

namespace blog;

use Illuminate\Database\Eloquent\Model;

class Telefonos extends Model
{
    protected $table ='telefonos';
    protected $primaryKey ='telefono_id';
    protected $fillable =['numero_tel','ciudadano_id'];
    public $timestamps = false;


    public function ciudadano(){
        
        return $this->belongsTo('blog\Ciudadanos');
    }
}
