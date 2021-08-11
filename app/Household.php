<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Household extends Model
{
    protected $guarded = [];

    public function household_memberships()
    {
        return $this->hasMany('App\Household_membership');
    }

    public function household_head()
    {
        return $this->belongsTo('App\Household_head');
    }
    
}
