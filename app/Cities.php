<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $table = 'cities';

    public function postalCodes(){
        return $this->hasMany(PostalCodes::class, 'city_id', 'id');
    }

    public function state(){
        return $this->belongsTo(States::class);
    }
}
