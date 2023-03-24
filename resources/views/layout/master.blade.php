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
  <title>Woles.</title>
</head>

<body>
    {{-- Navbar --}}
    <div class="mb-5">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #143F41">
            <div class="container-fluid mb-2" style="color: white">
                <i class="nyuci-in ms-3">Nyuci-in</i>
                <div class="collapse navbar-collapse justify-content-end navbar-dark" id="navbarNav"">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link @yield('menuHome') home" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('listCuci') home" href="/">List Jasa Cuci</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('Riwayat') home" href="/">Riwayat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('Contact') home" href="/">Contact</a>
                        </li>
                        @if (Auth::check())
                            <li class="nav-item ms-2">
                                <form method="POST" action="{{ url('/logout') }}">
                                    {{ csrf_field() }}
                                    <button type="submit"
                                        class="btn btn-danger text-red">Logout</button>
                                </form>
                </div>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/login"><i class="bi bi-box-arrow-right"></i> Login</a>
                </li>
            @endauth
            </ul>
        </div>
    </nav>
</div>

{{-- Content Product --}}
{{-- @section('menuProduct', 'active') --}}
@yield('content')

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
