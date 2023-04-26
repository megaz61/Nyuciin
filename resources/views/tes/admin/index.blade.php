@extends('layout.admin')
@section('dashboard', 'active')
@section('content')
    <!--Content Start-->
    <div class="content-start transition">
        <div class="container-fluid dashboard">
            <div class="content-header">
                <h1>Dashboard</h1>
                <p></p>
            </div>

            <div class="row">

                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 d-flex align-items-center">
                                    <i class="fas fa-inbox icon-home bg-primary text-light"></i>
                                </div>
                                <div class="col-8">
                                    <?php
                                    $jumlah_user = App\Models\user::count();
                                    ?>
                                    <p>Jumlah User</p>
                                    <h5>{{ $jumlah_user }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 d-flex align-items-center">
                                    <i class="fas fa-clipboard-list icon-home bg-success text-light"></i>
                                </div>
                                <div class="col-8">
                                    <?php
                                    $jumlah_tempat = App\Models\tempat::count();
                                    ?>
                                    <p>Jumlah Tempat Cuci</p>
                                    <h5>{{ $jumlah_tempat }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 d-flex align-items-center">
                                    <i class="fas fa-chart-bar  icon-home bg-info text-light"></i>
                                </div>
                                <div class="col-8">
                                    <?php
                                    $jumlah_booking = App\Models\booking::count();
                                    ?>
                                    <p>Jumlah Booking</p>
                                    <h5>{{ $jumlah_booking }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest Booking</h4>
                        </div>
                        {{-- Lastest booking --}}
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id Booking</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Jam Booking</th>
                                            <th scope="col">Nomor Telepon</th>
                                            <th scope="col">Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($booking as $booking)
                                            <tr>
                                                <td>{{ $booking->id }}</td>
                                                <td>{{ $booking->nama_lengkap }}</td>
                                                <td>{{ $booking->user->email }}</td>
                                                <td>{{ $booking->tanggal }}</td>
                                                <td>{{ $booking->booking_time }}</td>
                                                <td>{{ $booking->telpon }}</td>
                                                <td>
                                                    <form action="{{ route('admin.destroy', $booking->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE') {{-- tambahkan method DELETE --}}
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- tempat --}}
                <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tempat</h4>
                        </div>
                        {{-- Lastest booking --}}
                        {{-- tempat --}}
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">Id</th>
                                            <th scope="col" class="text-center">Nama Tempat</th>
                                            <th scope="col" class="text-center">Alamat</th>
                                            <th scope="col" class="text-center">Jam Buka</th>
                                            <th scope="col" class="text-center">Jam Tutup</th>
                                            <th scope="col" class="text-center">Edit</th>
                                            <th scope="col" class="text-center">Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tempat as $tempat)
                                            <tr>
                                                <td class="text-center">{{ $tempat->id }}</td>
                                                <td class="text-center">{{ $tempat->nama_tempat }}</td>
                                                <td class="text-center">{{ $tempat->alamat }}</td>
                                                <td class="text-center">{{ \Carbon\Carbon::parse($tempat->opening_time)->format('H:i') }}</td>
                                                <td class="text-center">{{ \Carbon\Carbon::parse($tempat->closing_time)->format('H:i') }}</td>
                                                <td class="text-center">
                                                    <form action="{{ url('editTempat/' . $tempat->id) }}">
                                                        @csrf
                                                        <button type="submit" class="btn btn-warning"
                                                            >Edit</button>
                                                    </form>
                                                </td>
                                                <td class="text-center">
                                                    <form action="{{ route('admin.destroyTempat', $tempat->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE') {{-- tambahkan method DELETE --}}
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
