@extends('layout.master')
@section('title', 'Home')
@section('menuHome', 'active')
@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12 mt-2" style="background-color: #143F41">
                <div class="ms-4">
                    <div class="row align-items-center">
                        <div class="col-md-4 d-grid gap-3">
                            <h1 class="text-uppercase fw-bold text-light">Cucikan kendaraan anda</h1>
                            <form action="">
                                <input type="text" name="cari" id="cari" placeholder="Cari tempat pencucian"
                                    class="form-control form-control-lg" style="">
                            </form>
                            <a href="{{-- url('tes/checkout/'.$data->id) --}}" class="btn btn-primary">Cari</a>
                        </div>
                        <div class="col-md-2 mt-3">{{-- jarak gambar & search --}}</div>
                        <div class="col-md-6 ">
                            <div class="">
                                <img src="{{ asset('gambar/vector@2x.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main container-fluid mt-5">
        <h1 class="text-center">Daftar Tempat Cuci Kendaraan</h1>

        {{--
        <div class="col-md-4">
            <div class="card">
                <img src="gambar_tempat_cuci_3.jpg" class="card-img-top" alt="Tempat Cuci 3">
                <div class="card-body">
                    <div class="row mb">
                        <div class="col-md-6">
                            <p class="card-text">★ 4.5</p>
                        </div>
                        <div class="col-md-6">
                            <p class="card-text text-end">Rp. 60.000</p>
                        </div>
                    </div>
                    <h5 class="card-title">Nama Tempat Cuci 3</h5>
                    <p class="card-text">Alamat Tempat Cuci 3</p>
                    <p class="card-text">Jam Buka: 10:00 - 22:00</p>
                </div>
            </div>
        </div>
        --}}
        <div class="container mt-5">
            <div class="row row-cols-md-4">
                @foreach ($tempats as $tempat)
                    <div class="col mb-3">
                        <div class="card h-100">
                            <img src="{{ url('storage') }}/{{ $tempat->gambar }}" class="card-img-top h-50 img-fluid" alt="...">
                            <div class="card-body">
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <p class="card-text">★ 4.5</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p class="card-text text-end fst-italic">{{ $tempat->list_harga }}</p>
                                    </div>
                                </div>
                                <h2 class="card-title">{{ $tempat->nama_tempat }}</h2>
                                <div class="card-text">
                                    {{ $tempat->alamat }}<br>
                                    Buka jam:
                                    {{ \Carbon\Carbon::parse($tempat->opening_time)->format('H:i') }} -
                                    {{ \Carbon\Carbon::parse($tempat->closing_time)->format('H:i') }}<br>
                                    <div class="mt-2">
                                        {{ $tempat->keterangan }}
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">Booking</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
