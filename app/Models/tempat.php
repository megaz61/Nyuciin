<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tempat extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function pesanan_detail(){
        return $this->hasMany('App\Models\bookingDetail','tempat_id','id');
    }
    public function pesanan(){
        return $this->belongsTo('App\Models\booking','booking_id','id');
    }
}
