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
                        @if (date('H:i') < $bookingItem->booking_time)
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
                            {{-- @elseif (date('H:i') > date('H:i', strtotime($bookingItem->booking_time . '+15 minutes'))) --}}
                            <div class="col-md-3">
                                <div class="row mx-4">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                        data-target="#rating{{ $bookingItem->id }}">
                                        Nilai
                                    </button>
                                </div>
                                <!-- Modal for Rating -->
                                @foreach ($booking as $bookingItem)
                                    <div class="modal fade" id="rating{{ $bookingItem->id }}" tabindex="-1"
                                        aria-labelledby="ratingLabel{{ $bookingItem->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form action="{{ url('/rating/store', $bookingItem->id) }}" method="POST">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="ratingLabel{{ $bookingItem->id }}">
                                                            Berikan
                                                            Nilai dan Ulasan (ID BOOKING: {{ $bookingItem->id }})</h5>
                                                        <button type="button" class="btn-close" data-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="text-center">
                                                            <h2 class="mb-4">Rating</h2>
                                                            <div class="rating-css">
                                                                <input type="radio" name="rating{{ $bookingItem->id }}"
                                                                    value="5" id="star5{{ $bookingItem->id }}" />
                                                                <label for="star5{{ $bookingItem->id }}"><i
                                                                        class="bi bi-star-fill"></i></label>
                                                                <input type="radio" name="rating{{ $bookingItem->id }}"
                                                                    value="4" id="star4{{ $bookingItem->id }}" />
                                                                <label for="star4{{ $bookingItem->id }}"><i
                                                                        class="bi bi-star-fill"></i></label>
                                                                <input type="radio" name="rating{{ $bookingItem->id }}"
                                                                    value="3" id="star3{{ $bookingItem->id }}" />
                                                                <label for="star3{{ $bookingItem->id }}"><i
                                                                        class="bi bi-star-fill"></i></label>
                                                                <input type="radio" name="rating{{ $bookingItem->id }}"
                                                                    value="2" id="star2{{ $bookingItem->id }}" />
                                                                <label for="star2{{ $bookingItem->id }}"><i
                                                                        class="bi bi-star-fill"></i></label>
                                                                <input type="radio" name="rating{{ $bookingItem->id }}"
                                                                    value="1" id="star1{{ $bookingItem->id }}" />
                                                                <label for="star1{{ $bookingItem->id }}"><i
                                                                        class="bi bi-star-fill"></i></label>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            <h2 class="mt -3 mb-3 text-center">Ulasan</h2>
                                                            <textarea class="form-control" rows="5" name="review{{ $bookingItem->id }}"
                                                                id="review{{ $bookingItem->id }}"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary"
                                                            onclick="submitRating({{ $bookingItem->id }})">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <script>
                                            var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                                            var xhr = new XMLHttpRequest();
                                            var url = '/rating/store/' + id;
                                            xhr.open('POST', url, true);
                                            xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
                                            xhr.onreadystatechange = function() {
                                                if (xhr.readyState === 4 && xhr.status === 200) {
                                                    // Refresh halaman setelah berhasil
                                                    location.reload();
                                                } else if (xhr.readyState === 4) {
                                                    // Tampilkan pesan gagal
                                                    alert('Gagal menyimpan rating dan ulasan. Mohon coba lagi.');
                                                }
                                            };
                                            var formData = new FormData();
                                            formData.append('_token', csrfToken);
                                            formData.append('rating', rating);
                                            formData.append('feedback', review);
                                            xhr.send(formData);
                                        </script>
                                    </div>
                                @endforeach
                        @endif

                    </div>
                </div>
            @endforeach
        </div>
    @endsection
