<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard - Atrana</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="{{ asset('/modules/fontawesome6.1.1/css/all.css') }}">
    <!-- Boxicons CSS-->
    <link rel="stylesheet" href="{{ asset('/modules/boxicons/css/boxicons.min.css') }}">
    <!-- Apexcharts  CSS -->
    {{-- <link rel="stylesheet" href="asset/modules/apexcharts/apexcharts.css"> --}}
</head>

<body>

    <!--Topbar -->
    <div class="topbar transition">
        <div class="bars">
            <button type="button" class="btn transition" id="sidebar-toggle">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <div class="menu">
            <ul>
                <li class="nav-item dropdown dropdown-list-toggle">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa fa-bell size-icon-1"></i><span class="badge bg-danger notif">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-list">
                        <div class="dropdown-header">Notifications</div>
                        <div class="dropdown-list-content dropdown-list-icons">
                            <div class="custome-list-notif">
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-icon bg-primary text-white">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        The Atrana template has the latest update!
                                        <div class="time text-primary">3 Min Ago</div>
                                    </div>
                                </a>

                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-info text-white">
                                        <i class="far fa-user"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Sri asks you for friendship!
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>

                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-danger text-white">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Storage has been cleared, now you can get back to work!
                                        <div class="time">20 Hours Ago</div>
                                    </div>
                                </a>


                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-info text-white">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Welcome to Atrana Template, I hope you enjoy using this template!
                                        <div class="time">Yesterday</div>
                                    </div>
                                </a>

                            </div>
                        </div>

                        <div class="dropdown-footer text-center">
                            <a href="#">View All</a>
                        </div>


                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="assets/images/avatar/avatar-1.png" alt="">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="my-profile.html"><i class="fa fa-user size-icon-1"></i> <span>My
                                Profile</span></a>
                        <a class="dropdown-item" href="settings.html"><i class="fa fa-cog size-icon-1"></i>
                            <span>Settings</span></a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item" href="#"><i class="fa fa-sign-out-alt  size-icon-1"></i> <span>My
                                Profile</span></a>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!--Sidebar-->
    <div class="sidebar transition overlay-scrollbars animate__animated  animate__slideInLeft">
        <div class="sidebar-content">
            <div id="sidebar">

                <!-- Logo -->
                <div class="logo">
                    <h2 class="mb-0"><img src="assets/images/logo.png"> Atrana</h2>
                </div>

                <ul class="side-menu">
                    <li>
                        <a href="index.html" class="active">
                            <i class='bx bxs-dashboard icon'></i> Dashboard
                        </a>
                    </li>

                    <!-- Divider-->
                    <li class="divider" data-text="STARTER">STARTER</li>

                    <li>
                        <a href="#">
                            <i class='bx bx-columns icon'></i>
                            Layout
                            <i class='bx bx-chevron-right icon-right'></i>
                        </a>
                        <ul class="side-dropdown">
                            <li><a href="layout-default.html">Default Layout</a></li>
                            <li><a href="layout-top-navigation.html">Top Navigation</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="blank-pages.html">
                            <i class='bx bxs-meh-blank icon'></i>
                            Blank Page
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class='fa fa-th icon'></i>
                            Bootstrap
                            <i class='bx bx-chevron-right icon-right'></i>
                        </a>
                        <ul class="side-dropdown">
                            <li><a href="bootstrap-alert.html">Alert</a></li>
                            <li><a href="bootstrap-badge.html">Badge</a></li>
                            <li><a href="bootstrap-breadcrumb.html">Breadcrumb</a></li>
                            <li><a href="bootstrap-buttons.html">Buttons</a></li>
                            <li><a href="bootstrap-card.html">Card</a></li>
                            <li><a href="bootstrap-carousel.html">Carousel</a></li>
                            <li><a href="bootstrap-dropdown.html">Dropdown</a></li>
                            <li><a href="bootstrap-list-group.html">List Group</a></li>
                            <li><a href="bootstrap-modal.html">Modal</a></li>
                            <li><a href="bootstrap-nav.html">Navs</a></li>
                            <li><a href="bootstrap-pagination.html">Pagination</a></li>
                            <li><a href="bootstrap-progress.html">Progress</a></li>
                            <li><a href="bootstrap-spinner.html">Spinner</a></li>
                        </ul>
                    </li>

                    <!-- Divider-->
                    <li class="divider" data-text="Atrana">Atrana</li>

                    <li>
                        <a href="#">
                            <i class='bx bx-columns icon'></i>
                            Components
                            <i class='bx bx-chevron-right icon-right'></i>
                        </a>
                        <ul class="side-dropdown">
                            <li><a href="component-avatar.html">Avatar</a></li>
                            <li><a href="component-toastify.html">Toastify</a></li>
                            <li><a href="component-sweet-alert.html">Sweet Alert</a></li>
                            <li><a href="component-hero.html">Hero</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class='bx bxs-notepad icon'></i>
                            Forms
                            <i class='bx bx-chevron-right icon-right'></i>
                        </a>
                        <ul class="side-dropdown">
                            <li><a href="forms-editor.html">Editor</a></li>
                            <li><a href="forms-validation.html">Validation</a></li>
                            <li><a href="forms-checkbox.html">Checkbox</a></li>
                            <li><a href="forms-radio.html">Radio</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class='bx bxs-widget icon'></i>
                            Widgets
                            <i class='bx bx-chevron-right icon-right'></i>
                        </a>
                        <ul class="side-dropdown">
                            <li><a href="widgets-chatboxs.html">ChatBox</a></li>
                            <li><a href="widgets-email.html">Emails</a></li>
                            <li><a href="widgets-pricing.html">Pricing</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class='bx bxs-bar-chart-alt-2 icon'></i>
                            Charts
                            <i class='bx bx-chevron-right icon-right'></i>
                        </a>
                        <ul class="side-dropdown">
                            <li><a href="chart-chartjs.html">ChartJS</a></li>
                            <li><a href="chart-apexcharts.html">Apexcharts</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class='bx bxs-cloud-rain icon'></i>
                            Icons
                            <i class='bx bx-chevron-right icon-right'></i>
                        </a>
                        <ul class="side-dropdown">
                            <li><a href="icons-fontawesome.html">Fontawesome</a></li>
                            <li><a href="icons-boostrap.html">Bootstrap Icons</a></li>
                        </ul>
                    </li>

                    <!-- Divider-->
                    <li class="divider" data-text="Pages">Pages</li>

                    <li>
                        <a href="#">
                            <i class='bx bxs-user icon'></i>
                            Auth
                            <i class='bx bx-chevron-right icon-right'></i>
                        </a>
                        <ul class="side-dropdown">
                            <li><a href="auth-login.html">Login</a></li>
                            <li><a href="auth-register.html">Register</a></li>
                            <li><a href="auth-forgot-password.html">Forgot Password</a></li>
                            <li><a href="auth-reset-password.html">Reset Password</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class='bx bxs-error icon'></i>
                            Errors
                            <i class='bx bx-chevron-right icon-right'></i>
                        </a>
                        <ul class="side-dropdown">
                            <li><a href="errors-403.html">403</a></li>
                            <li><a href="errors-404.html">404</a></li>
                            <li><a href="errors-500.html">500</a></li>
                            <li><a href="errors-503.html">503</a></li>
                        </ul>
                    </li>


                    <li>
                        <a href="credits.html"><i class='fa fa-pencil-ruler icon'></i>
                            Credits
                        </a>
                    </li>

                </ul>

                <div class="ads">
                    <div class="wrapper">
                        <div class="help-icon"><i class="fa fa-circle-question fa-3x"></i></div>
                        <p>Need Help with <strong>Atrana</strong>?</p>
                        <a href="docs/" class="btn-upgrade">Documentation</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div><!-- End Sidebar-->


    <div class="sidebar-overlay"></div>


    <!--Content Start-->
    <div class="content-start transition">
        <div class="container-fluid dashboard">
            <div class="content-header">
                <h1>Upload Tempat Pencucian</h1>
                <p></p>
            </div>

            <div class="row">
                <div class="container-md">

                    <div class="card">
                        <div class="card-body">

                            <div class="col-md-12">
                                <form action="{{ route('upTempat.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mt-5">
                                        <label for="">Nama Tempat</label>
                                        <input type="text" class="form-control" @error('nama') is-invalid @enderror
                                            name="nama_tempat" id="nama_tempat" placeholder="Masukkan Nama Tempat"
                                            autofocus value="{{ old('nama_tempat') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input type="text" class="form-control"
                                            @error('alamat') is-invalid @enderror name="alamat" id="alamat"
                                            placeholder="Masukkan Alamat" autofocus value="{{ old('alamat') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="opening_time">Jam Buka:</label>
                                        <input type="time" class="form-control" name="opening_time"
                                            value="{{ old('opening_time') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="closing_time">Jam Tutup:</label>
                                        <input type="time" class="form-control" name="closing_time"
                                            value="{{ old('closing_time') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">List Harga</label>
                                        <input type="text-field" class="form-control"
                                            @error('list_harga') is-invalid @enderror name="list_harga"
                                            id="list_harga" placeholder="Contoh: 50.000 - 100.000" autofocus
                                            value="{{ old('list_harga') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Keterangan</label>
                                        <input type="text-field" class="form-control"
                                            @error('keterangan') is-invalid @enderror name="keterangan"
                                            id="keterangan" placeholder="Masukkan Keterangan" autofocus
                                            value="{{ old('keterangan') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Gambar Tempat</label>
                                        <input type="file" class="form-control"
                                            @error('gambar') is-invalid @enderror name="gambar" id="gambar"
                                            placeholder="Masukkan Gambar Barang">
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <form action="/upTempat" method="post">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </form>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                        </div>
                                    </div>
                                    <br>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div> <!-- End Container -->
    </div><!-- End Content -->


    <!-- Footer -->
    <footer>
        <div class="footer">
            <div class="float-start">
                <p>2022 &copy; Atrana</p>
            </div>
            <div class="float-end">
                <p>Crafted with
                    <span class="text-danger">
                        <i class="fa fa-heart"></i> by
                        <a href="https://www.facebook.com/andreew.co.id/" class="author-footer">Andre Tri Ramadana</a>
                    </span>
                </p>
            </div>
        </div>
    </footer>
    <!-- General JS Scripts -->
    <script src="{{ asset('/js/atrana.js') }}"></script>

    <!-- JS Libraies -->
    {{-- <script src="{{asset('/modules/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('/modules/popper/popper.min.js')}}"></script> --}}

    <!-- Chart Js -->
    <script src="{{ asset('/modules/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('/js/ui-apexcharts.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('/js/script.js') }}"></script>
    <script src="{{ asset('/js/custom.js') }}"></script>
</body>

</html>
