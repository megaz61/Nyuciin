@extends('layout.master')
@section('title', 'Home')
@section('menuHome', 'active')
@section('content')
    <div class="container-fluid">
        <h1>(Nama Tempat cuci)</h1>
        <div class="col">
            <div class="row-md-4">
                <p>★ 4.5</p>
            </div>
            <div class="row-md-4">
                <p>{{-- $tempats->alamat --}} alamat</p>
            </div>
            <div class="row-md-4">
                <p>{{-- $tempats->jam_buka --}} jam buka - jam tutup</p>
            </div>
        </div>
    </div>
@endsection
