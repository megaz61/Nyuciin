@extends('layout.master')
@section('title', 'Home')
@section('Riwayat', 'active')

<style>
    .image-container {
        position: relative;
        width: 100%;
        height: 13rem;
        max-height: 13rem;
        overflow: hidden;
    }

    .image-container img {
        position: absolute;
        object-fit: cover;
    }

    /* rating */
    .rating-css div {
        color: #ffe400;
        font-size: 30px;
        font-family: sans-serif;
        font-weight: 800;
        text-align: center;
        text-transform: uppercase;
        padding: 20px 0;
    }

    .rating-css input {
        color: #ffe400;
        display: none;
    }

    .rating-css input+label {
        font-size: 60px;
        text-shadow: 1px 1px 0 #8f8420;
        cursor: pointer;
    }

    .rating-css input:checked+label~label {
        color: #b4afaf;
    }

    .rating-css label:active {
        transform: scale(0.8);
        transition: 0.3s ease;

    }

    /* End of Star Rating */
</style>

@section('content')
    @include('sweetalert::alert')
    <div class="container-fluid mt-5 pt-5">
        <h1 class="text-center">Detail Riwayat</h1>
        <div class="container d-flex justify-content-center ">
            <img src="{{ asset('gambar/riwayat.png') }}" class="img-fluid w-25">
        </div>
        <div class="container-md pt-4 ">
            @foreach ($booking as $bookingItem)
                <div class="card shadow mb-3">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-2">
                            <div class="image-container">
                                <img src="{{ url('storage') }}/{{ $bookingItem->tempat->gambar }}"
                                    class="img-fluid rounded-start w-100 h-100" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 py-2 ps-3">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <p class="card-title fs-4">Booking ID</p>
                                </div>
                                <div class="col-md-7">
                                    <p class="card-text text-end opacity-75">{{ $bookingItem->id }}</p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <p class="card-title fs-4">Nama</p>
                                </div>
                                <div class="col-md-7">
                                    <p class="card-text text-end opacity-75">{{ $bookingItem->nama_lengkap }}</p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <p class="card-title fs-4">Tempat Cuci</p>
                                </div>
                                <div class="col-md-7">
                                    <p class="card-text text-end opacity-75">{{ $bookingItem->tempat->nama_tempat }}</p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <p class="card-title fs-4">Tanggal Booking</p>
                                </div>
                                <div class="col-md-7">
                                    <p class="card-text text-end opacity-75">
                                        {{ \Carbon\Carbon::parse($bookingItem->booking_date)->format('d-m-Y') }}</p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <p class="card-title fs-4">Jam Booking</p>
                                </div>
                                <div class="col-md-7">
                                    <p class="card-text text-end opacity-75">
                                        {{ \Carbon\Carbon::parse($bookingItem->booking_time)->format('H:i') }}</p>
                                </div>
                            </div>
                        </div>
                        @if (date('H:i') < $bookingItem->booking_time && $bookingItem->rating == null)
                            <div class="col-md-3">
                                <div class="row mx-4">
                                    <a href="{{ url('ganti/' . $bookingItem->id) }}" class="btn btn-success mt-3">Ganti
                                        Jadwal</a>
                                </div>
                                <form action="{{ route('history.destroy', $bookingItem->id) }}" method="POST">
                                    <div class="row mx-4">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger mt-3"
                                            onclick="return confirm('Apakah Anda yakin ingin membatalkan?')">Batalkan</button>
                                    </div>
                                </form>
                            </div>
                        @elseif ($bookingItem->rating != null)
                            <div class="col-md-3">
                                <div class="row mx-4">
                                    <p class="text-center">★ {{ number_format($bookingItem->rating, 1 ,'.') }}</p>
                                </div>
                            </div>
                        @elseif (date('H:i') > date('H:i', strtotime($bookingItem->booking_time . '+15 minutes')) && $bookingItem->rating == null)
                            <div class="col-md-3">
                                <div class="row mx-4">
                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                        data-target="#rating{{ $bookingItem->id }}">
                                        Nilai
                                    </button>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="rating{{ $bookingItem->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="ratingLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="{{ route('rating.store', $bookingItem->id) }}" method="POST">
                                                @csrf
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="ratingLabel">Nilai Tempat Cuci (Booking ID:
                                                        {{ $bookingItem->id }})</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="rating-css text-center">
                                                        <input type="radio" id="star1{{ $bookingItem->id }}"
                                                            name="rating" value="1" />
                                                        <label for="star1{{ $bookingItem->id }}" title="Sangat Buruk"><i
                                                                class="bi bi-star-fill"></i></label>
                                                        <input type="radio" id="star2{{ $bookingItem->id }}"
                                                            name="rating" value="2" />
                                                        <label for="star2{{ $bookingItem->id }}" title="Buruk"><i
                                                                class="bi bi-star-fill"></i></label>
                                                        <input type="radio" id="star3{{ $bookingItem->id }}"
                                                            name="rating" value="3" />
                                                        <label for="star3{{ $bookingItem->id }}" title="Cukup"><i
                                                                class="bi bi-star-fill"></i></label>
                                                        <input type="radio" id="star4{{ $bookingItem->id }}"
                                                            name="rating" value="4" />
                                                        <label for="star4{{ $bookingItem->id }}" title="Bagus"><i
                                                                class="bi bi-star-fill"></i></label>
                                                        <input type="radio" id="star5{{ $bookingItem->id }}"
                                                            name="rating" value="5" />
                                                        <label for="star5{{ $bookingItem->id }}" title="Sangat Bagus"><i
                                                                class="bi bi-star-fill"></i></label>
                                                    </div>
                                                    <div class="form-group mt-4">
                                                        <label for="feedback">Ulasan</label>
                                                        <textarea class="form-control" id="feedback{{ $bookingItem->id }}" name="feedback" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- tanpa if --}}
                        {{-- <div class="col-md-3">
                    <div class="row mx-4">
                        <a href="" class="btn btn-warning">Nilai</a>
                        <a href="{{ url('ganti/' . $bookingItem->id) }}" class="btn btn-success mt-3">Ganti Jadwal</a>
                    </div>
                    <form action="{{ route('history.destroy', $bookingItem->id) }}" method="POST">
                        <div class="row mx-4">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mt-3" onclick="return confirm('Apakah Anda yakin ingin membatalkan?')">Batalkan</button>
                        </div>
                    </form>
                </div> --}}


                    </div>
                </div>
            @endforeach
        </div>
    @endsection
