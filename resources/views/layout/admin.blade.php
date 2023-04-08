<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Admin-Nyuciin</title>

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
                        <img src="asset/images/avatar/avatar-1.png" alt="">
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
                    <h2 class="mb-0"> Nyuciin</h2>
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
                        <a href="{{ route('upTempat.create') }}">
                            <i class='bx bxs-meh-blank icon'></i>
                            Upload Tempat
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class='bx bxs-meh-blank icon'></i>
                            Blank Page
                        </a>
                    </li>
                    <li>
                        <a href="blank-pages.html">
                            <i class='bx bxs-meh-blank icon'></i>
                            Blank Page
                        </a>
                    </li>

        </div>
    </div>
    </div>
    <!-- End Sidebar-->

    <div class="sidebar-overlay"></div>


    @yield('content')
    @include('sweetalert::alert')

    @show



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
