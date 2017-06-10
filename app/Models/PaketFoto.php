<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaketFoto extends Model
{
    public function paket(){
    	return @$this->belongsTo('App\Models\Paket','paket_id');
    }
}
