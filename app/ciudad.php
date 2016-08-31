<?php

namespace blog;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model {

    protected $table = "ciudades";

    public function country() {

        return $this->belongsTo('blog\Country');
    }
}
