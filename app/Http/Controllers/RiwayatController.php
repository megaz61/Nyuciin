<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\tempat;
use App\Models\User;
use App\Models\booking;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    public function index(){
        //show data booking and data tempat bedasarkan id booking yaitu tempat_id berelasi dengan id di data tempat
        $booking = booking::where('user_id',Auth::user()->id)->get();
        return view('/tes/riwayat',compact('booking'));
    }
    public function riwayat($id){
        // $tempat = tempat::where('id',$id)->get();
        // $booking = booking::where('tempat_id',$tempat->id)->get();
        // return view('/riwayat/' . $booking->id,compact('booking, tempat'));

        // show data booking and data tempat bedasarkan id booking yaitu tempat_id berelasi dengan id di data tempat
        $booking = booking::find($id);
        $tempat = tempat::find($booking->tempat_id);
        return view('/tes/detailRiwayat',compact('booking','tempat'));
    }
}
