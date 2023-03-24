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
   <div class="container-fluid mt-5">
    <h1 class="text-center">Daftar Tempat Cuci Kendaraan</h1>

   </div>
@endsection
