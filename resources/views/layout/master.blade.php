<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    {{-- boostrap js --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Poppins';
            font-size: 22px;
        }

        .navbar-icon {
            font-size: 20px;
        }

    </style>
    <title>Nyuciin.</title>
</head>

<body>
    {{-- Navbar --}}
    <div class="mb-5">
        <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #143F41">
            <div class="container-fluid mb-2" style="color: white">
                <i class="nyuci-in mt-2 ms-4 h3">Nyuci-in</i>
                <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-dark" id="navbarNav">
                    <ul class="navbar-nav mt-2 ms-auto mb-2 mb-lg-0 fs-6">
                        <li class="nav-item">
                            <a class="nav-link @yield('menuHome') home" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('listCuci') home" href="/">List Jasa Cuci</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('Riwayat') home" href="{{ route('history') }}">Riwayat</a>
                        </li>
                        @if (Auth::check() && auth()->user()->is_admin == null)
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="position: relative; top: -3px; left: ">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        <i class="bi bi-person-bounding-box "></i> <span> My Profil</span>
                                    </a>
                                    <a class="dropdown-item" href="{{ route('history') }}"><i
                                            class="bi bi-layout-text-sidebar-reverse"></i><span> Riwayat</span></a>
                                    <hr class="dropdown-divider">
                                    <form method="POST" action="{{ url('/logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="bi bi-box-arrow-left"></i> <span>Keluar</span>
                                        </button>
                                    </form>
                                </ul>
                            </li>
                        @elseif (Auth::check() && auth()->user()->is_admin != null)
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        fill="currentColor" class="bi bi-person-circle navbar-icon" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin') }}">
                                        <i class="bi bi-person-bounding-box "></i> <span> Dashboard</span>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <form method="POST" action="{{ url('/logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="bi bi-box-arrow-left"></i> <span>Keluar</span>
                                        </button>
                                    </form>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/login"><i class="bi bi-box-arrow-right"></i>
                                    Login</a>
                            </li>
                        @endauth
                </ul>
            </div>
    </nav>
</div>

{{-- Content Product --}}
{{-- @section('menuProduct', 'active') --}}
@yield('content')
@include('sweetalert::alert')

@show
{{-- Footer
        <div class="footer">
          <div class="container">
              <div class="row">
                  <div class="col-md-4">
                      <h3>Nyuciin</h3><hr>
                      <p>
                          <img src="img/um2.png" width="8%" class="d-inline-block">   Teknik Informatika UM
                      </p>
                  </div>
                  <div class="col-md-4">
                      <h3>Contact Us</h3><hr>
                      <div class="" id="contact">
                          <div class="">
                            <button type="button" class="btn-pesan" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Kirim Pesan</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Kritik & Saran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama:</label>
                                <input type="text" class="form-control" id="recipient-name">
                              </div>
                              <div class="form-group">
                                <label for="message-text" class="col-form-label">Komentar:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class=" btn-primary">Kirim Pesan</button>
                          </div>
                        </div>
                      </div>
                    </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <h3>Follow Us</h3><hr>
                      <ul>
                          <li>Facebook</li>
                          <li>Instagram</li>
                          <li>YouTube</li>
                      </ul>
                  </div>
              </div>-
          </div>
      </div>
      --}}
</body>

</html>
