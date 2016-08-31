<?php

namespace blog;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

    protected $table = 'country';
    protected $primaryKey='country_id';


    public function ciudades() {

        return $this->hasMany('blog\ciudad');
    }
}
