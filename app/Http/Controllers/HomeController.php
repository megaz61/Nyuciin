<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use Alert;
use Illuminate\Support\Facades\Auth;
use App\Models\tempat;
use Carbon\Carbon;
class HomeController extends Controller
{

    public function index(tempat $tempats){
        $tempats = tempat::paginate(10);
        return view('/tes/home',compact('tempats'));
    }
    public function search(Request $request)
    {
        //ubah inputan search menjadi huruf kecil semua, hapus semua spasi dan hapus tanda baca titik
        $search = strtolower(trim($request->search));
        $search = str_replace(".", "", $search);
        $search = str_replace(" ", "", $search);
        // $search = strtolower(trim($request->search));

        if($request->has('search')){
            //ubah huruf kecil database nama_tempat dam alamat kemudian hapus semua spasi dan tanda baca titik
            $tempats = tempat::whereRaw('LOWER(REPLACE(REPLACE(nama_tempat, " ", ""), ".", "")) LIKE ?', "%{$search}%")
            ->orWhereRaw('LOWER(REPLACE(REPLACE(alamat, " ", ""), ".", "")) LIKE ?', "%{$search}%")
            ->paginate(10);


            // $tempats = tempat::whereRaw('LOWER(REPLACE(nama_tempat, " ", "")) LIKE ?', "%{$search}%")
            // ->orWhereRaw('LOWER(REPLACE(alamat, " ", "")) LIKE ?', "%{$search}%")
            // ->paginate(10);
            // $tempats = tempat::whereRaw('LOWER(nama_tempat) LIKE ?', "%{$search}%")
            // ->orWhereRaw('LOWER(alamat) LIKE ?', "%{$search}%")
            // ->paginate(10);
        }else{
            Alert::error('Gagal', 'Data tempat tidak ditemukan');
            $tempats = tempat::paginate(10);
        }
        return view('/tes/home', compact('tempats'));
    }
    public function filter(Request $request){
        // jika request value adalah jumlah_rating, maka akan diurutkan berdasarkan jumlah_rating
        // jika request value adalah jumlah, maka akan diurutkan berdasarkan booking terbanyak atau id booking pada tempat terbanyak
        // jika request value adalah terbaru, maka akan diurutkan berdasarkan tanggal terbaru
        if($request->input('value') === 'jumlah_rating'){
            $tempats = tempat::orderBy('jumlah_rating', 'desc')->paginate(10);
        }
        // elseif($request->input('value') === 'jumlah') {
        //     $tempats = Tempat::withCount('bookings')->orderBy('bookings_count', 'desc')->paginate(10);
        // }
        elseif($request->input('value') === 'terbaru') {
            $tempats = tempat::latest()->paginate(10);
        } else {
            $tempats = tempat::paginate(10);
        }
        return view('tes.home', compact('tempats'));
    }


}
