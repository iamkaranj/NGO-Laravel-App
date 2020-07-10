<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    protected $table = 'donations';

    protected $with = 'type';

    protected $fillable = [
        'donation_no',
        'donor_id',
    ];

    public function type(){
        return $this->hasOne(DonationTypes::class);
    }
}
