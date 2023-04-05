@extends('layout.master')
@section('title', 'Home')
@section('Riwayat', 'active')
@section('content')
@include('sweetalert::alert')
<div class="container-md mt-5 pt-5">
    <h1>Detail Riwayat</h1>
    {{-- <a href="{{url('riwayat')}}/{{$booking->id}}" class="btn btn-success">Detail Riwayat</a> --}}
    {{-- <p class="fs-5">{{ \Carbon\Carbon::parse($booking->booking_time)->format('H:i') }}</p> --}}
    <table class="table table-hover table-striped table-responsive-md">
        <tr>
            <th class="text-center">ID Booking</th>
            <th class="text-center">Nama Lengkap</th>
            <th class="text-center">Tanggal Booking</th>
            <th class="text-center">Jam Booking</th>
            <th class="text-center">Detail</th>
        </tr>
        @foreach ($booking as $booking)
        <tr>
            <td class="text-center">{{$booking->id}}</td>
            <td class="text-center">{{$booking->nama_lengkap}}</td>
            <td class="text-center">{{ \Carbon\Carbon::parse($booking->booking_date)->format('d-m-Y') }}</td>
            <td class="text-center">{{ \Carbon\Carbon::parse($booking->booking_time)->format('H:i') }}</td>
            <td class="text-center"><a href="{{url('riwayat')}}/{{$booking->id}}" class="btn btn-success">Detail Riwayat</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection