@extends('layout.master')
@section('title', 'Home')
@section('menuHome', 'active')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <h1>{{$tempat->nama_tempat}}</h1> {{-- !kurang nyambung in ke database --}}
        </div>
        <div class="row pt-5">
            <div class="col text-start">
                Column
            </div>
            <div class="col text-center">
                Column
            </div>
            <div class="col text-end">
                Column
            </div>
        </div>
    </div>
@endsection
