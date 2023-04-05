<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
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
        // $user = User::find(Auth::user()->id);
        // $tamggal = Carbon::now();
        // $booking = new booking;
        // $booking->user_id = $user->id;
        // $booking->tempat_id = $tempat->id;
        // $booking->tanggal = $tamggal;
        // $booking->nama_lengkap = $request->nama_lengkap;
        // $booking->telpon = $request->telpon;
        // $booking->booking_time = $request->booking_time;
        // $booking->save();
        // return redirect('riwayat')->with('success', 'Anda Berhasil Booking');

        $validateData = $request->validate([
            'nama_lengkap' => 'required',
            'telpon' => 'required|numeric',
            'booking_time' => 'required',
        ]);

        //Jika jam booking sudah ada, maka tidak bisa
        $booking = booking::where('tempat_id', $id)->where('booking_time', $request->booking_time)->first();
        if ($booking) {
            return redirect()->back()->with('error', 'Jam Booking Sudah Ada');
        }
        //Jika jam booking lebih dari jam tutup dan kurang dari jam buka, maka tidak bisa
        if ($request->booking_time > $tempat->closing_time || $request->booking_time < $tempat->opening_time) {
            return redirect()->back()->with('error', 'Jam Booking Tidak Sesuai');
        }


        $validateData['user_id'] = Auth::user()->id;
        $validateData['tempat_id'] = $id;
        $validateData['tanggal'] = Carbon::now();

        booking::create($validateData);
        return redirect('riwayat')->with('success', 'Anda Berhasil Booking');

    }
}
