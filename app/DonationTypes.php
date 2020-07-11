<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonationTypes extends Model
{
    protected $table = 'donation_type';
    
    protected $fillable = [
        'donation_id',
        'itemable_type',
        'itemable_id',
        'quantity',
        'note'
    ];

    public function itemable(){
        return $this->morphTo();
    }

    public function donation()
    {
        return $this->belongsTo(Donations::class , 'donation_id');
    }
}
