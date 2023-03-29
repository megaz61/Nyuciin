<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;
use Illuminate\Support\Facades\Auth;
use App\Models\tempat;
use App\Models\User;
use App\Models\booking;
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

    public function fix_booking(Request $request,$id){
        $tempat = tempat::find($id);
        $user = User::find(Auth::user()->id);
        $booking = new booking;
        $booking->user_id = $user->id;
        $booking->nama_lengkap = $request->nama_lengkap;
        $booking->telpon = $request->telpon;
        $booking->booking_time = $request->booking_time;
        $booking->save();
        return redirect()->back()->with('success', 'Produk anda berhasil di tambahkan');
    }
}