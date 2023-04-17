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
    display: none;
  }
  .rating-css input + label {
    font-size: 60px;
    text-shadow: 1px 1px 0 #8f8420;
    cursor: pointer;
  }
  .rating-css input:checked + label ~ label {
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
        @foreach ($booking as $booking)
        <div class="card shadow mb-3">
            <div class="row g-0 align-items-center">
                <div class="col-md-2">
                    <div class="image-container">
                        <img src="{{ url('storage') }}/{{ $booking->tempat->gambar}}" class="img-fluid rounded-start w-100 h-100" alt="">
                    </div>
                </div>
                <div class="col-md-7 py-2 ps-3">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <p class="card-title fs-4">Booking ID</p>
                        </div>
                        <div class="col-md-7">
                            <p class="card-text text-end opacity-75">{{$booking->id}}</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <p class="card-title fs-4">Nama</p>
                        </div>
                        <div class="col-md-7">
                            <p class="card-text text-end opacity-75">{{{$booking->nama_lengkap}}}</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <p class="card-title fs-4">Tempat Cuci</p>
                        </div>
                        <div class="col-md-7">
                            <p class="card-text text-end opacity-75">{{{$booking->tempat->nama_tempat}}}</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <p class="card-title fs-4">Tanggal Booking</p>
                        </div>
                        <div class="col-md-7">
                            <p class="card-text text-end opacity-75">{{ \Carbon\Carbon::parse($booking->booking_date)->format('d-m-Y') }}</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <p class="card-title fs-4">Jam Booking</p>
                        </div>
                        <div class="col-md-7">
                            <p class="card-text text-end opacity-75">{{ \Carbon\Carbon::parse($booking->booking_time)->format('H:i') }}</p>
                        </div>
                    </div>
                </div>
    @if (date('H:i') < $booking->booking_time)
        <div class="col-md-3">
            <div class="row mx-4">
                <a href="{{ url('ganti/' . $booking->id) }}" class="btn btn-success mt-3">Ganti Jadwal</a>
            </div>
            <form action="{{ route('history.destroy', $booking->id) }}" method="POST">
                <div class="row mx-4">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mt-3"
                        onclick="return confirm('Apakah Anda yakin ingin membatalkan?')">Batalkan</button>
                </div>
            </form>
        </div>
    {{-- @elseif (date('H:i') > date('H:i', strtotime($booking->booking_time . '+15 minutes'))) --}}
        <div class="col-md-3">
            <div class="row mx-4">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#rating">
                    Nilai
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="rating" tabindex="-1" role="dialog" aria-labelledby="ratingLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ratingLabel">Nilai Tempat Cuci</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('rating.store', $booking->id) }}" method="POST">
                                @csrf
                                <div class="rating-css">
                                    <input type="radio" id="star5" name="rating" value="5" />
                                    <label for="star5" title="Sangat Bagus">&#9733;</label>
                                    <input type="radio" id="star4" name="rating" value="4" />
                                    <label for="star4" title="Bagus">&#9733;</label>
                                    <input type="radio" id="star3" name="rating" value="3" />
                                    <label for="star3" title="Cukup">&#9733;</label>
                                    <input type="radio" id="star2" name="rating" value="2" />
                                    <label for="star2" title="Buruk">&#9733;</label>
                                    <input type="radio" id="star1" name="rating" value="1" />
                                    <label for="star1" title="Sangat Buruk">&#9733;</label>
                                </div>
                                <div class="form-group">
                                    <label for="feedback">Ulasan</label>
                                    <textarea class="form-control" id="feedback" name="feedback" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $(document).ready(function(){
                    $('#exampleModal').modal('show');
                });
              </script>
        </div>
    @endif
    {{-- tanpa if --}}
    {{-- <div class="col-md-3">
                    <div class="row mx-4">
                        <a href="" class="btn btn-warning">Nilai</a>
                        <a href="{{ url('ganti/' . $booking->id) }}" class="btn btn-success mt-3">Ganti Jadwal</a>
                    </div>
                    <form action="{{ route('history.destroy', $booking->id) }}" method="POST">
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
