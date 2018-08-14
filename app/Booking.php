<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function homestay()
    {
        return $this->belongTo('App\Homestay');
    }
}
