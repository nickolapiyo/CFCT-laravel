<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsors extends Model
{
    protected $guarded = [];

    public function beneficiaries()
    {
        return $this->hasMany('App\Beneficiary');
    }
}
