@extends('layout.master')
@section('title', 'Home')
@section('menuHome', 'active')
@section('content')
    <div class="container-fluid mt-5 pt-5">
        <div class="col-md-6 mt-4 ms-4">
            <form action="{{route('upTempat.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-5">
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="form-control"  @error('nama_lengkap') is-invalid @enderror name="nama_tempat" id="nama_lengkap" placeholder="Masukkan Nama Lengkap" autofocus
                    value="{{ old('nama_lengkap') }}">
                </div>
                <div class="form-group">
                    <label for="">Nomor Telpon</label>
                    <input type="tel" id="telpon" name="telpon" pattern="[0-9]{10}"  @error('telpon') is-invalid @enderror required>
                </div>
                <div class="form-group">
                    <label for="opening_time">Jam Booking</label>
                    <input type="time" class="form-control" name="booking_time" value="{{ old('booking_time') }}">
                </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3">
                                    <form action="/upTempat" method="post">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </form>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
@endsection
