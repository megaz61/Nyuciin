<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tempat;

class TempatController extends Controller
{
    public function create() {
        return view('/tes/upTempat');
    }

    public function store(Request $request) {
        //https://www.sahretech.com/2021/01/cara-membuat-upload-file-ke-database.html
        //dd($request->all());
        $validatedData=$request->validate([
            'nama_tempat'=> 'required|max:255',
            'alamat'=> 'required|max:255',
            'gambar'=> 'required',
            'opening_time' => 'nullable|date_format:H:i',
            'closing_time' => 'nullable|date_format:H:i',
            'list_harga'=> 'required',
            'keterangan'=> 'required'
            ]);
        //mengambil data file yg diupload
        $file=$request->file('gambar');
        //mengambil nama file yang diupload
        $nama_file=$file->getClientOriginalName();
        //memindahkan file ke folder public/img
        $file->move('storage', $file->getClientOriginalName());

        //upload ke database
        $tempat=new tempat;
        $tempat->nama_tempat=$request->nama_tempat;
        $tempat->alamat=$request->alamat;
        $tempat->gambar=$nama_file;
        $tempat->opening_time=$request->opening_time;
        $tempat->closing_time=$request->closing_time;
        $tempat->list_harga=$request->list_harga;
        $tempat->keterangan=$request->keterangan;
        $tempat->save();

        return redirect()->back()->with('success', 'Produk anda berhasil di tambahkan');
    }

    /*
    public function index(tempat $tempat) {
        $tempat = tempat::all();
        return view('/index', compact('tempat'));
    }
    */

    /*edit tempat*/
/*
    public function edittempat($id) {
        $tempat = tempat::find($id);
        return view('/edittempat', compact('tempat'));
    }
    public function updatetempat(Request $request,$id) {
        $tempat=tempat::where('id',$id)->first();
        $tempat->nama_tempat=$request->nama;
        $tempat->harga=$request->harga;
        $tempat->stok=$request->stok;
        $tempat->keterangan=$request->keterangan;
        $tempat->update();

        return redirect('/userprofile')->with('success', 'Produk anda berhasil di edit');
    }
*/
}
