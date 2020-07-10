<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donors extends Model
{
    protected $table = 'donors';

    protected $with = 'donations';

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

    public function city(){
        return $this->hasOne(Cities::class,'city','id');
    }

    public function state(){
        return $this->hasOne(States::class,'state','id');
    }
    
    public function country(){
        return $this->hasOne(Countries::class,'country','id');
    }
}
