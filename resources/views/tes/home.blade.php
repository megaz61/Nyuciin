@extends('layout.master')
@section('title', 'Home')
@section('menuHome', 'active')
@section('content')
    @include('sweetalert::alert')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12 mt-2" style="background-color: #143F41">
                <div class="ms-4">
                    <div class="row align-items-center">
                        <div class="col-md-4 d-grid gap-3 ">
                            <h1 class="text-uppercase fw-bold text-light h1">Cucikan kendaraan anda</h1>
                            <form action="{{ route('search') }}">
                                <input type="search" id="search" name="search" placeholder="Cari tempat pencucian"
                                    class="form-control form-control-lg shadow fs-5" style="">
                                <button type="submit" class="mt-3 btn btn-primary form-control shadow fs-6">Cari</button>
                            </form>
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

        <form action="{{ route('filter') }}">
            <div class="row row-cols-md-4">
                <div class="col-mb-4">
                    <label for="value">Filter by</label>
                    <select name="value" id="value" class="form-select">
                        <option value="">Select Status</option>
                        <option value="jumlah_rating">Jumlah Rating</option>
                        <option value="terbaru">Terbaru</option>
                    </select>
                </div>
                <div class="col-mb-4 mt-4">
                    <button type="submit" class="btn btn-success">Filter</button>
                </div>
            </div>
        </form>

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
        <div class="container mt-3">
            <div class="row row-cols-md-4">
                @foreach ($tempats as $tempat)
                    <div class="col mb-4">
                        <div class="card h-100 shadow">
                            <img src="{{ url('storage') }}/{{ $tempat->gambar }}" class="card-img-top h-50 img-fluid"
                                alt="...">
                            <div class="card-body">
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <p class="card-text h5">
                                            @if ($tempat->jumlah_rating != 0)
                                                ★ {{ number_format($tempat->jumlah_rating, 1, '.') }}
                                            @else
                                                ★ -
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <h2 class="card-title">{{ $tempat->nama_tempat }}</h2>
                                <div class="card-text fs-6">
                                    {{ $tempat->alamat }}<br>
                                    Buka jam:
                                    {{ \Carbon\Carbon::parse($tempat->opening_time)->format('H:i') }} -
                                    {{ \Carbon\Carbon::parse($tempat->closing_time)->format('H:i') }}<br>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{ url('detail/' . $tempat->id) }}" class="btn btn-primary">Booking</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
