<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homeprice extends Model
{
    public function bookings()
    {
        return $this->hasMany('App\booking');
    }
}
