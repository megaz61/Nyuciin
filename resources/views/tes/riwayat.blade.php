@extends('layout.master')
@section('title', 'Home')
@section('Riwayat', 'active')
@section('content')
@include('sweetalert::alert')
<div class="container-md mt-5 pt-5">
    <div class="row mt-2">
        <div class="col text-center">
            <h4>ID Reservasi</h4>
        </div>
        <div class="col text-center">
            <h4>Nama</h4>
        </div>
        <div class="col text-center">
            <h4>Tanggal Reservasi</h4>
        </div>
        <div class="col text-center">
            <h4>Jam Reservasi</h4>
        </div>
        <div class="col text-center">
            <h4>Lihat Detail</h4>
        </div>
    </div>
    @foreach ($booking as $booking)
    <div class="row mt-2">
        <div class="col text-center">
            <p class="fs-5">{{$booking->id}}</p>
        </div>
        <div class="col text-center">
            <p class="fs-5">{{$booking->nama_lengkap}}</p>
        </div>
        <div class="col text-center">
            <p class="fs-5">{{$booking->tanggal}}</p>
        </div>
        <div class="col text-center">
            <p class="fs-5">{{ \Carbon\Carbon::parse($booking->booking_time)->format('H:i') }}</p>
        </div>
        <div class="col text-center">
            <form action="">
                <input type="submit">
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection
