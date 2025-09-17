@extends('layout.admin')
@section('editTempat', 'active')
@section('content')

<style>
    .preseveLines{
        white-space: pre-wrap;
    }
</style>
    <!--Content Start-->
    <div class="content-start transition">
        <div class="container-fluid dashboard">
             <!-- Notif -->
    <div class="container-md-5">
        <div class="content row mt-3" id="about">

            <!--alert berhasil daftar-->
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif

        {{-- ISI UP TEMPAT --}}
        <div class="row align-items-center">
        <p class="fs-1 text-center">Edit Tempat</p>
        <div class="col-md-6">
            <div class="container d-flex justify-content-center ">
                <img src="{{ url('storage') }}/{{ $tempat->gambar }}" class="img-fluid ">
            </div>
        </div>
        <div class="col-md-6">
            <form action="{{route('update.tempat', $tempat->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="form-group mt-5">
                    <label for="">Nama Tempat</label>
                    <input type="text" class="form-control" @error('nama_tempat') is-invalid @enderror
                        name="nama_tempat" id="nama_tempat" placeholder="" autofocus
                        value="{{$tempat->nama_tempat}}">

                </div>
                <div class="form-group mt-4">
                    <label for="">Alamat</label>
                    <input type="text" id="alamat" class="form-control" name="alamat"
                        placeholder="" @error('alamat') is-invalid @enderror
                        value="{{$tempat->alamat}}">
                </div>
                <div class="form-group mt-4">
                    <label for="opening_time">Jam Buka</label>
                    <input type="time" class="form-control" name="opening_time" value="{{ old('opening_time') }}">
                </div>
                <div class="form-group mt-4">
                    <label for="closing_time">Jam Tutup</label>
                    <input type="time" class="form-control" name="closing_time" value="{{ old('closing_time') }}">
                </div>
                <div class="form-group mt-4">
                    <label for="">List Harga</label>
                    <textarea type="text-field" class="text-secondary form-control preseveLine"
                        @error('list_harga') is-invalid @enderror name="list_harga" id="list_harga"
                        value="">{{ $tempat->list_harga }}
                    </textarea>
                </div>
                <div class="form-group mt-4">
                    <label for="">Keterangan</label>
                    <textarea type="text-field" class="text-secondary form-control"
                        @error('keterangan') is-invalid @enderror name="keterangan" id="keterangan"
                         autofocus value=""> {{ $tempat->keterangan}}
                    </textarea>
                </div>
                <div class="form-group mt-4">
                    <label for="">Gambar Tempat</label>
                    <input type="file" class="form-control" @error('gambar') is-invalid @enderror
                        name="gambar" id="gambar" placeholder="Masukkan Gambar Barang">
                </div>
                <br>
                <div class="row">
                    <div class="d-grid">
                        <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
                <br>
            </form>
        </div>
    </div>
        </div> <!-- End Container -->
    </div><!-- End Content -->
@endsection
