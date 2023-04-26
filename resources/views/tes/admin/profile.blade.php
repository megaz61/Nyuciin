@extends('layout.admin')
@section('dashboard', 'active')
@section('content')

    <div class="content-start transition">
        <div class="container-fluid dashboard">
            <div class="content-header">
                <h4>Hi, (nama pengguna)!</h4>
                <p>Change information about yourself on this page</p>
            </div>

            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center  ">
                            <img src="assets/images/avatar/avatar-1.png" alt="user-avatar" class="d-block rounded"
                                height="100" width="100px" id="uploadedAvatar" />
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Upload new photo</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="file" id="upload" class="account-file-input" hidden
                                        accept="image/png, image/jpeg" />
                                </label>
                                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" accept="my-profile.html">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input class="form-control" type="text" id="firstName" name="firstName"
                                        value="Andree" autofocus />
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input class="form-control" type="text" name="lastName" id="lastName"
                                        value="Doe" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input class="form-control" type="text" id="email" name="email"
                                        value="Andree@example.com" placeholder="Andree@example.com" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="organization" class="form-label">Organization</label>
                                    <input type="text" class="form-control" id="organization" name="organization"
                                        value="AtranaTheme" />
                                </div>

                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
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
