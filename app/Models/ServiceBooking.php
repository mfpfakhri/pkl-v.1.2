<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceBooking extends Model
{
    public function booking(){
    	return @$this->belongsTo('App\Models\Booking','booking_id');
    }
}
