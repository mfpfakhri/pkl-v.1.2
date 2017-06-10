<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function customer(){
    	return @$this->hasMany('App\Models\Customer','id','customer_id');
    }
    public function payment(){
    	return @$this->belongsTo('App\Models\Payment','payment_id');
    }
    public function schedule(){
    	return @$this->belongsTo('App\Models\Schedule','schedule_id');
    }
    public function service_booking(){
    	return @$this->hasMany('App\Models\ServiceBooking','id','service_booking_id');
    }
}
