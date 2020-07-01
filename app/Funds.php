<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funds extends Model
{
    protected $table = 'fund_donation';
    protected $with = 'donationType';
    protected $fillable = [
        'avail'
    ];

    public function donationType(){
        return $this->morphMany(DonationTypes::class,'itemable');
    }
}
