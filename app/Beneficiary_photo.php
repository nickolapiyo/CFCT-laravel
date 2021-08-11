<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary_photo extends Model
{
    protected $guarded = [];

    public function beneficiary() {
        return $this->belongsTo('App\Beneficiary');
    }
}
