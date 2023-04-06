@extends('layout.master')
@section('title', 'Home')
@section('Riwayat', 'active')
@section('content')
    @include('sweetalert::alert')
    <div class="container-md mt-5 pt-5">
        <h1>Detail Riwayat</h1>
    <div class="container-md pt-4">
        @foreach ($booking  as $booking)
        <div class="card shadow">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <img src="{{ url('storage') }}/{{ $booking->tempat->gambar}}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-7">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <p class="card-title fs-4">Booking ID</p>
                        </div>
                        <div class="col-md-7">
                            <p class="card-text text-end opacity-75">{{$booking->id}}</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <p class="card-title fs-4">Tempat Cuci</p>
                        </div>
                        <div class="col-md-7">
                            <p class="card-text text-end opacity-75">{{{$booking->tempat->nama_tempat}}}</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <p class="card-title fs-4">Tanggal Booking</p>
                        </div>
                        <div class="col-md-7">
                            <p class="card-text text-end opacity-75">{{ \Carbon\Carbon::parse($booking->booking_date)->format('d-m-Y') }}</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <p class="card-title fs-4">Jam Booking</p>
                        </div>
                        <div class="col-md-7">
                            <p class="card-text text-end opacity-75">{{ \Carbon\Carbon::parse($booking->booking_time)->format('H:i') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row mx-4">
                        @if (\Carbon\Carbon::now('Asia/Jakarta')->diffInMinutes(\Carbon\Carbon::parse($booking->booking_time)) > 15)

                        <button type="submit" class="btn btn-warning">Nilai</button>
                        @else
                        -
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
