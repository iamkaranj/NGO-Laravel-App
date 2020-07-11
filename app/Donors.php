<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donors extends Model
{
    protected $table = 'donors';

    // protected $with = 'city';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'mobile',
        'dob',
        'address',
        'city',
        'state',
        'country',
        'pincode',
        'equipments',
        'funds',
    ];

    public function donations(){
        return $this->belongsTo(Donations::class);
    }

    public function cities(){
        return $this->belongsTo(Cities::class,'city','id');
    }

    public function state(){
        return $this->belongsTo(States::class,'state','id');
    }
    
    public function country(){
        return $this->belongsTo(Countries::class,'country','id');
    }
}
