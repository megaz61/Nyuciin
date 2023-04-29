@extends('layout.admin')
@section('profile', 'active')
@section('content')


    <div class="content-start transition">
        <div class="container-fluid dashboard">
            <div class="content-header">
                <h4>Hi, {{ $user->nama }} !</h4>
                <p>Change information about yourself on this page</p>
            </div>

            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="button-wrapper form-group">
                            <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- gambar --}}
                            <img src="{{asset('gambar/user.jpg')}}" class="profile-user-img rounded-circle img-fluid mx-auto" style="height: 10%; width: 10%" alt="">
                            <label for="_userAvatarfile" class="btn btn-primary me-2 mb-4" tabindex="0">
                              <span class="d-none d-sm-block">Upload new photo</span>
                            </label>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input type="file" id="_userAvatarfile" class="account-file-input" name="_userAvatarfile" hidden accept="image/png, image/jpeg" data-value-type="file" />
                            <p class="text-muted mb-0 mt-3">Allowed JPG, GIF or PNG. Max size of 800K</p>
                            <div class="image-previewer"></div>
                            <div class="row mt-5">
                                <div class="mb-3 col-md-6">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input class="form-control" type="text" id="nama" name="nama"
                                        value="{{ $user->nama }}" autofocus />
                                </div>

                                {{-- isi data --}}
                                <div class="mb-3 col-md-6">
                                    <label for="telpon" class="form-label">Nomor Telpon</label>
                                    <?php $telp = intval($user->telpon); ?>
                                    <input class="form-control" type="tel" name="telpon" id="telpon"
                                        value="0{{ $telp }}" />
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input class="form-control" type="text" id="email" name="email"
                                        value="{{ $user->email }}" placeholder="" />
                                </div>
                                <input type="hidden" name="gambar" id="gambar" value="{{ $user->gambar }}">
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>

            <div class="card mt-3">
                <h5 class="card-header">Delete Account</h5>
                <div class="card-body">
                    <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                            <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                            <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                        </div>
                    </div>
                    <form method="POST" accept="my-profile.html">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="accountActivation"
                                id="accountActivation" />
                            <label class="form-check-label" for="accountActivation">I confirm my account
                                deactivation</label>
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div> <!-- End Container -->
    </div><!-- End Content -->
@endsection
