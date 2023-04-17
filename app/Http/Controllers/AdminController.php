<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use App\Models\tempat;
use App\Models\User;
use App\Models\booking;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index(){
        $booking = booking::where('user_id',Auth::user()->id)->get();
        return view('/tes/admin/index',compact('booking'));
    }
    public function upTempat(){
        return view('/tes/admin/upTempat');
    }
    public function destroy($id){
        $booking = booking::find($id);
        $booking->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect('/admin');
    }
}