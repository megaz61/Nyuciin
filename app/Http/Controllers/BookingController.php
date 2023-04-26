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
    //public function index menampilak data tabel tempat dan tabel booking bedasarkan id pada tempat adalah tempat_id pada booking
    public function index($id)
    {
        $tempat = tempat::find($id);
        $booking = booking::where('tempat_id', $id)->get();
        // Menghitung rating yang != null

        $jumlah_rating = booking::where('tempat_id',$id)->where('rating', '!=', null)->count();
        return view('/tes/detailTempat', compact('tempat', 'booking', 'jumlah_rating'));
    }

    // public function index($id){
    //     $tempat = tempat::find($id);
    //     return view('/tes/detailTempat',compact('tempat'));
    // }
    public function booking($id)
    {
        $tempat = tempat::find($id);
        return view('/tes/booking', compact('tempat'));
    }

    public function booking_success($id)
    {
        $booking = booking::find($id);
        $tempat = tempat::find($booking->tempat_id);
        return view('riwayat', compact('booking', 'tempat'));
    }
    public function fix_booking(Request $request, $id)
    {
        $tempat = tempat::find($id);
        $validateData = $request->validate([
            'nama_lengkap' => 'required',
            'telpon' => 'required|numeric',
            'booking_time' => 'required',
        ]);

        //Jika jam booking pada tanggal hari ini sudah ada, maka tidak bisa
        $booking = booking::where('tempat_id', $id)
            ->where('booking_time', $request->booking_time)
            ->where('tanggal', \Carbon\Carbon::now()->format('Y-m-d'))
            ->first();

        if ($booking !== null) {
            Alert::error('Gagal', 'Jam booking sudah ada');
            return redirect()->back();
        }
        if ($request->booking_time > $tempat->closing_time || $request->booking_time < $tempat->opening_time) {
            Alert::error('Gagal', 'Jam Booking tidak sesuai');
            return redirect()->back();
        }

        //jika validateData kosong maka error
        if (empty($validateData)) {
            Alert::error('Gagal', 'Data tidak boleh kosong');
            return redirect()->back();
        }

        $validateData['user_id'] = Auth::user()->id;
        $validateData['tempat_id'] = $id;
        $validateData['tanggal'] = Carbon::now();
        //jumlah_booking pada tempat bertambah 1
        $tempat->jumlah_booking = $tempat->jumlah_booking + 1;
        $tempat->update();

        booking::create($validateData);
        Alert::success('Success', 'Berhasil Booking');
        return redirect('/riwayat');

    }
}
