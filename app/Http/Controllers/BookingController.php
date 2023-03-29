<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;
use Illuminate\Support\Facades\Auth;
use App\Models\tempat;
use App\Models\User;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function index($id){
        $tempat = tempat::find($id);
        return view('/tes/detailTempat',compact('tempat'));
    }
    public function booking($id){
        $tempat = tempat::find($id);
        return view('/tes/booking',compact('tempat'));
    }
}
