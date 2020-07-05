<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    protected $table = 'states';

    public function cities(){
        return $this->hasMany(Cities::class);
    }

    public function country(){
        return $this->belongsTo(Countries::class);
    }
}
