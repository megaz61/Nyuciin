<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tempat extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function booking_detail(){
        return $this->hasMany('App\Models\bookingDetail','tempat_id','id');
    }
    public function booking(){
        return $this->belongsTo('App\Models\booking','booking_id','id');
    }
}
