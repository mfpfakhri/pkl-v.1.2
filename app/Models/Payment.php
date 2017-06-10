<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function booking(){
    	return @$this->hasMany('App\Models\Booking','id','customer_id');
    }
}
