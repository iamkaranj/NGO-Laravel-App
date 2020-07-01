<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipments extends Model
{
    protected $table = 'equipments';
    protected $with = 'donationType';
    protected $fillable = [
        'name',
        'model',
        'brand',
        'type',
        'category',
        'description',
        'avail'
    ];

    public function donationType(){
        return $this->morphMany(DonationTypes::class,'itemable');
    }
}
