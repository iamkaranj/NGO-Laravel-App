<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $table = 'countries';

    public function state(){
        return $this->hasMany(States::class);
    }
}
