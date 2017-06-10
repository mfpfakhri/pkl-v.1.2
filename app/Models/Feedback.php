<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public function servicebooking(){
    	return @$this->belongsTo('App\Models\ServiceBooking','service_booking_id');
    }
}
