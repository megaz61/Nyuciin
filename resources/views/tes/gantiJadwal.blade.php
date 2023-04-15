@extends('layout.master')
@section('title', 'Home')
@section('menuHome', 'active')
@section('content')

    {{-- form nya --}}
    <div class="container mt-5 pt-5">
        {{-- Error Alert --}}
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row align-items-center">
            <p class="fs-1 text-center">Form Ganti Jadwal Booking</p>
            <div class="col-md-6">
                <div class="container d-flex justify-content-center ">
                    <img src="{{ asset('gambar/booking.png') }}" class="img-fluid ">
                </div>
            </div>
            <div class="col-md-6">
                <form action="{{ route('ganti.store', $booking->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-4">
                        <label for="opening_time">Jam Booking</label>
                        <input type="time" class="form-control" name="booking_time" value="{{ old('booking_time') }}">
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-2">
                            <a href="{{url()->previous()}}" class="btn btn-danger">Cancel</a>
                        </div>
                        <div class="col sm-4">
                            <button type="submit" class="btn btn-success">Ganti Jadwal</button>
                        </div>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
@endsection
