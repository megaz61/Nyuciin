<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function tempat()
    {
    return $this->belongsTo('App\Models\Tempat', 'tempat_id'); }

    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
    public function booking_detail(){
        return $this->hasMany('App\Models\bookingDetail','booking_id','id');
    }
}
