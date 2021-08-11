<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
    protected $guarded = [];

    public function household_membership()
    {
        return $this->hasOne('App\Household_membership');
    }

    public function household_head()
    {
        return $this->belongsTo('App\Household_head');
    }
}
