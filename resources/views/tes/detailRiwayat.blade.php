@extends('layout.master')
@section('title', 'Home')
@section('Riwayat', 'active')
<style>
    .image-container {
        position: relative;
        width: 100%;
        height: 500px;
        overflow: hidden;
    }

    .image-container img {
        position: absolute;
        object-fit: cover;
    }
</style>

@section('content')
    <div class="container-md">
        <div class="row">
            <h1 class="h1 mt-5 pt-3">{{$tempat->nama_tempat}}</h1>
        </div>
        <div class="row pt-1">
            <div rowspan="2" class="col image-container">
                <img src="{{ url('storage') }}/{{ $tempat->gambar }}" alt="Description" class="img-fluid w-100 h-100">
            </div>
            <div class="col text-start">
                Rating
            </div>
            <div class="col text-center">
                <p class="fs-5">{{ $tempat->alamat }}</p>
            </div>
            <div class="col text-center">
                <p class="fs-5">Booking Jam: {{ \Carbon\Carbon::parse($booking->booking_time)->format('H:i') }}</p>
            </div>
@endsection
