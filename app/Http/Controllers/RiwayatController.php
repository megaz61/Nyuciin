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
        //mengkonversi format booking_time menjadi format H:i
        return view('/tes/riwayat',compact('booking'));
    }
    public function destroy($id){
        $booking = booking::find($id);
        $booking->delete();
        Alert::success('Success', 'Booking berhasil dibatalkan');
        return redirect()->back();
    }
    public function indexGanti($id){
        $booking = booking::find($id);
        return view('/tes/gantiJadwal',compact('booking'));
    }

    public function ganti(Request $request, $id){
        $validateData = $request->validate([
            'booking_time' => 'required'
        ]);
        $booking = booking::find($id); // Menggunakan "Booking" (huruf B besar) sesuai dengan nama model yang benar
        if (!$booking) {
            // Jika booking dengan ID yang diberikan tidak ditemukan, tampilkan error
            Alert::error('Gagal', 'Data booking tidak ditemukan');
            return redirect()->back();
        }

        $tempat = tempat::find($booking->tempat_id); // Menggunakan "Tempat" (huruf T besar) sesuai dengan nama model yang benar
        if (!$tempat) {
            // Jika tempat dengan ID yang ditemukan di booking tidak ditemukan, tampilkan error
            Alert::error('Gagal', 'Data tempat tidak ditemukan');
            return redirect()->back();
        }

        //jika jam booking pada booking time sudah ada maka error
        $bookings = booking::where('tempat_id', $booking->tempat_id)
            ->where('booking_time', $request->booking_time)
            ->where('tanggal', \Carbon\Carbon::now()->format('Y-m-d'))
            ->first();

        if ($bookings !== null) {
            Alert::error('Gagal', 'Jam booking sudah ada');
            return redirect()->back();
        }

        // if($request->booking_time == $booking->booking_time){
        //     Alert::error('Gagal', 'Jam Booking sudah ada');
        //     return redirect()->back();
        // }

        if ($request->booking_time > $tempat->closing_time || $request->booking_time < $tempat->opening_time) {
            Alert::error('Gagal', 'Jam Booking tidak sesuai');
            return redirect()->back();
        }

        //jika validateData kosong maka error
        if (empty($validateData)) {
            Alert::error('Gagal', 'Data tidak boleh kosong');
            return redirect()->back();
        }
        $booking->booking_time = $request->booking_time;
        $booking->update();
        Alert::success('Success', 'Booking berhasil diubah');
        return redirect('/riwayat');
    }
    public function rating(Request $request,$id){
        $booking = booking::find($id);
        $tempat = tempat::find($booking->tempat_id);
        $validateData = $request->validate([
            'rating' => 'required',
            'feedback' => 'nullable'
        ]);
        if($booking->rating != null){
            Alert::error('Gagal', 'Anda sudah memberikan rating');
            return redirect()->back();
        }
        $booking->rating = $request->rating;
        $booking->feedback = $request->feedback;
        $booking->update();
        //jika jumlah rating != 0, jumlah_rating dari rating pada booking ditambahkan dengan jumlah_rating pada tempat dulu kemudian hasilnya dibagi dengan jumlah rating yang ada pada booking
        if($tempat->jumlah_rating != 0 ){
            $tempat->jumlah_rating = ($tempat->jumlah_rating + $booking->rating) / 2;
            $tempat->update();
        }
        //jika jumlah rating == 0, maka rating pada tempat sama dengan rating pada booking
        elseif ($tempat->jumlah_rating == 0){
            $tempat->jumlah_rating = $booking->rating;
            $tempat->update();
        }
        Alert::success('Success', 'Rating berhasil diberikan');
        return redirect('/riwayat');
    }
}
