<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostalCodes extends Model
{
    protected $table = 'postal_codes';

    public function city(){
        return $this->belongsTo(Cities::class, 'city_id', 'id');
    }
}
