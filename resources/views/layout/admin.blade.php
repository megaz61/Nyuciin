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
    {{-- icon boostrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
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
        {{-- <div class="menu">
        </div> --}}
    </div>

    <!--Sidebar-->
    @if (Auth::user()->is_admin != null)
        <div class="sidebar transition overlay-scrollbars animate__animated  animate__slideInLeft">
            <div class="sidebar-content">
                <div id="sidebar">

                    <!-- Logo -->
                    <div class="logo">
                        <h2 class="mb-0">Nyuciin</h2>
                    </div>

                    <ul class="side-menu">
                        <li>
                            <a href="{{ route('admin') }}" class="nav-link @yield('dashboard')">
                                <i class='bx bxs-dashboard icon'></i> Dashboard
                            </a>
                        </li>

                        <!-- Divider-->
                        <li class="divider" data-text="STARTER">Admin</li>


                        <li>
                            <a href="{{ route('upTempat.create') }}" class="nav-link @yield('upTempat')">
                                <i class='bx bxs-meh-blank icon'></i>
                                Upload Tempat
                            </a>
                        </li>
                        <li>
                            <a href="" class="nav-link @yield('editTempat')">
                                <i class='bx bxs-meh-blank icon'></i>
                                Edit Tempat
                            </a>
                        </li>
                </div>
            </div>
        </div>
    @elseif (Auth::user()->is_admin == null)
        <div class="sidebar transition overlay-scrollbars animate__animated  animate__slideInLeft">
            <div class="sidebar-content">
                <div id="sidebar">

                    <!-- Logo -->
                    <div class="logo">
                        <h2 class="mb-0">Nyuciin</h2>
                    </div>

                    <ul class="side-menu">
                        <li>
                            <a href="{{ route('profile') }}" class="nav-link @yield('profile')">
                                <i class='bx bxs-dashboard icon'></i> My Profile
                            </a>
                        </li>

                </div>
            </div>
        </div>
    @endif
    <!-- End Sidebar-->

    <div class="sidebar-overlay"></div>


    @yield('content')
    @include('sweetalert::alert')

@show



<!-- Footer -->
<footer>
    <div class="footer">
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
