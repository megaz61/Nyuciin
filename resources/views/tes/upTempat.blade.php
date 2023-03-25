
    @extends('layout.master')
@section('title', 'Home')
@section('menuHome', 'active')
@section('content')
  @auth
  @else
  <ul>
    <li>
        <a href="/login" class="nav-link"></a>
    </li>
  </ul>
  @endauth
  <!-- kotak tengah -->
  <div class="container-md-5">
    <div class="content row"  id="about">
        @if($errors->any())
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


<div class="col-md-6 mt-4 ms-4">
    <form action="{{route('upTempat.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-5">
            <label for="">Nama Tempat</label>
            <input type="text" class="form-control"  @error('nama') is-invalid @enderror name="nama_tempat" id="nama_tempat" placeholder="Masukkan Nama Tempat" autofocus
            value="{{ old('nama_barang') }}">
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" class="form-control"  @error('alamat') is-invalid @enderror name="alamat" id="alamat" placeholder="Masukkan Alamat" autofocus
            value="{{ old('alamat') }}">
        </div>
        <div class="form-group">
            <label for="">Jam Buka Tempat Pencucian</label>
            <input type="time" class="form-control" name="jam_buka" id="jam_buka"
            value="{{ old('jam_buka') }}">
        </div>
        <div class="form-group">
            <label for="">Jam Tutup Tempat Pencucian</label>
            <input type="time" class="form-control" name="jam_tutup" id="jam_tutup"
            value="{{ old('jam_tutup') }}">
        </div>
        <div class="form-group">
            <label for="">Keterangan</label>
            <input type="text-field" class="form-control"  @error('keterangan') is-invalid @enderror name="keterangan" id="keterangan" placeholder="Masukkan Keterangan" autofocus
            value="{{ old('keterangan') }}">
        </div>
        <div class="form-group">
            <label for="">Gambar Tempat</label>
            <input type="file" class="form-control"  @error('gambar') is-invalid @enderror name="gambar" id="gambar" placeholder="Masukkan Gambar Barang">
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
              <form action="/upTempat" method="post">
                <button type="submit" class="btn buy">Submit</button>
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
  <div class="main">
</div>
