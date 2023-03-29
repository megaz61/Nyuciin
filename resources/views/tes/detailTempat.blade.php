@extends('layout.master')
@section('title', 'Home')
@section('menuHome', 'active')
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
        @if (!empty($tempat))
            <div class="row">
                <h1 class="mt-5 pt-3">{{ $tempat->nama_tempat }}</h1>
            </div>
            <div class="row pt-1">
                <div class="col text-start">
                    Rating
                </div>
                <div class="col text-center">
                    <p class="fs-5">{{ $tempat->alamat }}</p>
                </div>
                <div class="col text-end">
                    <p>{{ \Carbon\Carbon::parse($tempat->opening_time)->format('H:i') }} -
                        {{ \Carbon\Carbon::parse($tempat->closing_time)->format('H:i') }}</p>
                </div>
            </div>

            <div class="container pt-1">
                <div class="image-container">
                    <img src="{{ url('storage') }}/{{ $tempat->gambar }}" alt="Description" class="img-fluid w-100 h-100">
                </div>
            </div>

            <div class="row pt-4">
                <div class="col-md-7">
                    <h3>Deskripsi</h3>
                    <p class="fs-6">{{ $tempat->keterangan }}</p>
                </div>

                <div class="col-md-5 text-end">
                    <h3>Booking disini chuk</h3>
                    <a href="{{ url('booking/' . $tempat->id) }}" class="btn btn-primary">Booking</a>
                </div>
            </div>
        @endif
    </div>
@endsection
