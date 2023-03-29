@extends('layout.master')
@section('title', 'Home')
@section('menuHome', 'active')
@section('content')
    <div class="container-fluid">
@if (!empty($tempat))
<div class="row">
    <h1 class="mt-5 pt-3">{{$tempat->nama_tempat}}</h1>{{-- !kurang nyambung in ke database --}}
</div>
<div class="row pt-5">
    <div class="col text-start">
        Rating
    </div>
    <div class="col text-center">
       <p class="fs-5">{{$tempat->alamat}}</p>
    </div>
    <div class="col text-end">
        <a href="{{url('booking/'.$tempat->id)}}" class="btn btn-primary">Booking</a>
    </div>
</div>
<div class="row pt-5">
    <div class="col">
        <img src="{{ url('storage') }}/{{ $tempat->gambar }}" class="img-fluid" alt="...">
    </div>
</div>
@endif
    </div>
@endsection
