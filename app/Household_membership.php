<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Household_membership extends Model
{
    protected $guarded = [];

    public function participant()
    {
        return $this->belongsTo('App\Participants');
    }

    public function household()
    {
        return $this->belongsTo('App\Household');
    }

    // public function household_head()
    // {
    //     return $this->hasOne(Household_head::class);
    // }
}
