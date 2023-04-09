@extends('layout.admin')
@section('content')
    <!--Content Start-->
    <div class="content-start transition">
        <div class="container-fluid dashboard">
            <div class="content-header">
                <h1>Upload Tempat Pencucian</h1>
                <p></p>
            </div>

             <!-- Notif -->
    <div class="container-md-5">
        <div class="content row mt-3" id="about">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!--alert berhasil daftar-->
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        @section('content')

        {{-- ISI UP TEMPAT --}}
            <div class="row">
                <div class="container-md">

                    <div class="card">
                        <div class="card-body">

                            <div class="col-md-12">
                                <form action="{{ route('upTempat.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mt-5">
                                        <label for="">Nama Tempat</label>
                                        <input type="text" class="form-control" @error('nama') is-invalid @enderror
                                            name="nama_tempat" id="nama_tempat" placeholder="Masukkan Nama Tempat" autofocus
                                            value="{{ old('nama_tempat') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input type="text" class="form-control" @error('alamat') is-invalid @enderror
                                            name="alamat" id="alamat" placeholder="Masukkan Alamat" autofocus
                                            value="{{ old('alamat') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="opening_time">Jam Buka:</label>
                                        <input type="time" class="form-control" name="opening_time"
                                            value="{{ old('opening_time') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="closing_time">Jam Tutup:</label>
                                        <input type="time" class="form-control" name="closing_time"
                                            value="{{ old('closing_time') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">List Harga</label>
                                        <input type="text-field" class="form-control"
                                            @error('list_harga') is-invalid @enderror name="list_harga" id="list_harga"
                                            placeholder="Contoh: 50.000 - 100.000" autofocus
                                            value="{{ old('list_harga') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Keterangan</label>
                                        <input type="text-field" class="form-control"
                                            @error('keterangan') is-invalid @enderror name="keterangan" id="keterangan"
                                            placeholder="Masukkan Keterangan" autofocus value="{{ old('keterangan') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Gambar Tempat</label>
                                        <input type="file" class="form-control" @error('gambar') is-invalid @enderror
                                            name="gambar" id="gambar" placeholder="Masukkan Gambar Barang">
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
                        </div>
                    </div>

                </div>
            </div>

        </div> <!-- End Container -->
    </div><!-- End Content -->
@endsection
