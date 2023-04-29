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
    public function index()
    {
        $booking = booking::where('user_id', Auth::user()->id)->get();
        $tempat = tempat::all();
        return view('/tes/admin/index', compact('booking', 'tempat'));
    }
    public function upTempat()
    {
        return view('/tes/admin/upTempat');
    }
    public function destroy($id)
    {
        $booking = booking::find($id);
        $booking->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect('/admin');
    }
    public function destroyTempat($id)
    {
        $tempat = tempat::find($id);
        $tempat->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect('/admin');
    }
    public function tempat($id)
    {
        $tempat = tempat::find($id);
        return view('/tes/admin/editTempat', compact('tempat'));
    }
    public function updateTempat(Request $request, $id)
    {
        $validate = $request->validate([
            'nama_tempat' => 'required',
            'alamat' => 'required',
            'list_harga' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required',
        ]);
        //mengambil data file yg diupload
        $file = $request->file('gambar');
        //mengambil nama file yang diupload
        $nama_file = $file->getClientOriginalName();
        //memindahkan file ke folder public/img
        $file->move('storage', $file->getClientOriginalName());

        //upload ke database
        $tempat = tempat::find($id);
        $tempat->nama_tempat = $request->nama_tempat;
        $tempat->alamat = $request->alamat;
        $tempat->gambar = $nama_file;
        $tempat->opening_time = $request->opening_time;
        $tempat->closing_time = $request->closing_time;
        $tempat->list_harga = $request->list_harga;
        $tempat->keterangan = $request->keterangan;
        $tempat->update();
        Alert::success('Success', 'Data Berhasil Diubah');
        return redirect('/tes/admin/index');
    }
    public function profile()
    {
        $user = User::find(Auth::user()->id);
        return view('/tes/admin/profile', compact('user'));
    }
    public function updateProfile(Request $request, $id)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'telpon' => 'required|numeric',
        ]);
        $user = User::find($id);
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->telpon = $request->telpon;
        $user->save();
        Alert::success('Success', 'Data Berhasil Diubah');
        return redirect()->route('profile');
    }
}
