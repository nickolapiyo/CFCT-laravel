<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Household_head extends Model
{
    protected $guarded = [];

    public function participant()
    {
        return $this->hasOne('App\Participant');
    }

    public function household()
    {
        return $this->hasOne('App\Household');
    }
}
