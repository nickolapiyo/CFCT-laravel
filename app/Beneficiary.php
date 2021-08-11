<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $guarded = [];

    public function beneficiary_photos()
    {
        return $this->hasMany('App\Beneficiary_photo');
    }

    public function sponsor()
    {
        return $this->hasOne('App\Sponsor');
    }
}
