<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
	protected $table = 'schedule';
    public function booking(){
    	return @$this->hasMany('App\Models\Booking','id','booking_id');
    }
    public function paket(){
    	return @$this->hasMany('App\Models\Paket','id','schedule_id');
    }
}
