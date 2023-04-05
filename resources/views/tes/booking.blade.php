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
        <p class="fs-2">Form Booking</p>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="container d-flex justify-content-center ">
                    <img src="{{ asset('gambar/vector@2x.png') }}" class="img-fluid ">
                </div>
            </div>
            <div class="col-md-6">
                <form action="{{ route('booking.store', $tempat->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-5">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" @error('nama_lengkap') is-invalid @enderror
                            name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap" autofocus
                            value="{{ old('nama_lengkap') }}">
                    </div>
                    <div class="form-group mt-4">
                        <label for="">Nomor Telpon</label>
                        <input type="tel" id="telpon" class="form-control" name="telpon"
                            placeholder="Masukkan Nomor Telepon" @error('telpon') is-invalid @enderror
                            value="{{ old('telpon') }}">
                    </div>
                    <div class="form-group mt-4">
                        <label for="opening_time">Jam Booking</label>
                        <input type="time" class="form-control" name="booking_time" value="{{ old('booking_time') }}">
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-2">
                            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
                        </div>
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-success">booking</button>
                        </div>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
@endsection
