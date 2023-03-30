@extends('layout.master')
@section('title', 'Home')
@section('menuHome', 'active')
@section('content')
<div class="container-md">
    @if (!empty($booking))
        <div class="row">
            <h1 class="mt-5 pt-3">{{ $tempat->nama_tempat }}</h1>
        </div>
        <div class="row pt-3">
            <div class="col text-start">
                Rating
            </div>
            <div class="col text-center">
                <p class="fs-5">{{ $tempat->alamat }}</p>
            </div>
            <div class="col text-end">
                <a href="{{ url('booking/' . $tempat->id) }}" class="btn btn-primary">Booking</a>
            </div>
        </div>

        <div class="container pt-3">
            <div class="image-container">
                <img src="{{ url('storage') }}/{{ $tempat->gambar }}" alt="Description" class="img-fluid w-100 h-100">
            </div>
        </div>
    @endif
</div>
@endsection
