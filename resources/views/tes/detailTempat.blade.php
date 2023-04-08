@extends('layout.master')
@section('title', 'Home')
@section('menuHome', 'active')
<style>
    .image-container {
        position: relative;
        width: 100%;
        height: 500px;
        overflow: hidden;
    }

    .image-container img {
        position: absolute;
        object-fit: cover;
    }
</style>

@section('content')
    <div class="container-md">
        @if (!empty($tempat))
            <div class="row">
                <h1 class="mt-5 pt-3">{{ $tempat->nama_tempat }}</h1>
            </div>
            <div class="row pt-1">
                <div class="col text-start">
                    Rating
                </div>
                <div class="col text-center">
                    <p class="fs-5">{{ $tempat->alamat }}</p>
                </div>
                <div class="col text-end">
                    <p>{{ \Carbon\Carbon::parse($tempat->opening_time)->format('H:i') }} -
                        {{ \Carbon\Carbon::parse($tempat->closing_time)->format('H:i') }}</p>
                </div>
            </div>

            <div class="container pt-1 g-0">
                <div class="image-container">
                    <img src="{{ url('storage') }}/{{ $tempat->gambar }}" alt="Description" class="img-fluid w-100 h-100">
                </div>
            </div>

            <div class="row pt-4">
                <div class="col-md-7">
                    <h3>Deskripsi</h3>
                    <p class="fs-6">{{ $tempat->keterangan }}</p>
                </div>
                <div class="col-md-5 text-end">
                    <h3>List Harga</h3>
                    <div>
                        <p>
                            {{ $tempat->list_harga }}
                        </p>
                    </div>
                    <a href="{{ url('booking/' . $tempat->id) }}" class="btn btn-primary">Booking</a>
                </div>
            </div>
        @endif
        {{-- user sudah booking --}}
        <div class="container-sm pb-5">
            <div class="card shadow mt-5">
                <h2 class="card-text text-center mt-3">List yang sudah booking hari ini:</h2>
                @foreach ($booking as $booking)
                    {{-- jika ada id pada data tempat yang tidak tercantum pada booking->tempat_id maka menampilkan data kosong --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <i class="bi bi-person-circle fs-5"> {{ $booking->nama_lengkap }}</i>
                            </div>
                            <div class="col-md-5">
                                {{-- menampilkan data booking_time hanya hari ini dengan mencocokan data tanggal  --}}
                                @if ($booking->tanggal == \Carbon\Carbon::now()->format('Y-m-d') && $booking->tempat_id == $tempat->id)
                                    <p class="card-text text-end opacity-75 fs-5">Pukul:
                                        {{ \Carbon\Carbon::parse($booking->booking_time)->format('H:i') }}</p>
                                @elseif ($booking->tanggal != \Carbon\Carbon::now()->format('Y-m-d') || $booking->tempat_id != $tempat->id)
                                    <p class="card-text text-end opacity-75 fs-5">Tidak ada</p>
                                @endif
                                {{-- <p class="card-text text-end opacity-75 fs-5">Pukul: {{ \Carbon\Carbon::parse($booking->booking_time)->format('H:i') }}</p> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
