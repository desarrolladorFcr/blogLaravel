<?php

namespace blog;

use Illuminate\Database\Eloquent\Model;

class ciudades extends Model {

    protected $table = 'ciudades';
    protected $primaryKey = 'id_ciudades';
    protected $fillable = ['nombre', 'id_pais'];
    public $timestamps = false;

    public function paises() {
        
        return $this->belongsTo('blog\paises', $this->primaryKey);
    }

}
