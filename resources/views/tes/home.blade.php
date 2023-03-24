@extends('layout.master')
@section('title', 'Home')
@section('menuHome', 'active')
@section('content')
    <div class="container-fluid mt-5">
        <div class="row ">
            <div class="col-md-12 mt-5">
                <div class="ms-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mt-5">
                                <h1 class="mt-5">Cucikan kendaraan anda</h1>
                                <form action="">
                                    <input type="text" name="cari" id="cari" placeholder="Cari tempat pencucian"
                                        class="" style="">
                                </form>
                                {{-- <a href="{{ url('tes/checkout/'.$data->id) }}" class="btn btn-primary">Pesan</a> --}}
                            </div>
                            <div class="col-md-6">
                                <div class="">
                                    <img src="{{ asset('gambar/vector@2x.png') }}" alt="" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="main container-fluid mt-5">
    <h1 class="text-center">Daftar Tempat Cuci Kendaraan</h1>
        <div class="card-group" >
        @foreach ($tempats as $tempat)
            <div class="card center">
              <img src="{{url('storage')}}/{{$tempat->gambar}}" class="card-img-top" alt="..." >
              <div class="card-body">
                <h2 class="card-title">{{$tempat->nama_tempat}}</h2>
                <p class="card-text">
                    Rp.{{$tempat->alamat}}<br>
                    Buka jam:
                    {{$tempat->jam_buka}} - {{$tempat->jam_tutup}}<br>
                    {{$tempat->keterangan}} <br>
                </p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary">Booking</a>
              </div>
            </div>
      @endforeach
      </div>
   </div>
@endsection
