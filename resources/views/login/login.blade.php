<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="{{asset('css/global2.css')}}" />
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700&display=swap"
    />
  </head>
  <body>
    <div class="login-1">
        @if($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!--alert berhasil daftar-->
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
</div>
@endif

<!--alert gagal login-->
@if (session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
</div>
@endif

      <div class="login-1-inner">
        <div class="frame-parent">
          <img class="frame-icon" alt="" src="{{asset('gambar/frame.svg')}}" />
          <div class="masuk-ke-parent">
            <div class="masuk-ke">Masuk ke</div>
            <b class="nyuci-in">Nyuci-in</b>
          </div>
          <div class="jika-belum-punya-akun-parent">
            <div class="jika-belum-punya">Jika belum punya akun</div>
            <div class="kamu-bisa">
              <span>Kamu bisa</span><span class="span"> </span>
            </div>
            <a href="/register" class="daftar-disini">Daftar disini !</a>
          </div>
        </div>
      </div>
      <div class="password-parent">
        <form action="/login" class="form-group" method="post">
            @csrf
        <div class="password">
          <div class="password-child">
                <input type="password" id="password" name="password" placeholder="Password"
                class="password-child @error('password') is-invalid @enderror" style="padding-left: 7%" autofocus value="{{ old('password') }}">
          </div>

          <img class="invisible-1-icon" alt="" src="{{asset('gambar/invisible-1.svg')}}" />
          <div class="forgot-password">Forgot password ?</div>
        </div>
        <div class="login">
          <div class="login-child">
                <button type="submit" value="Login" class="login-child" style="color:white">Login</button>
          </div>
        </div>
        <div class="or-continue-with">or continue with</div>
        <img class="group-child" alt="" src="{{asset('gambar/group-13.svg')}}" />
        <div class="masuk">Masuk</div>
        <div class="email">
          <div class="password-child">
                  <input type="email" name="email" id="email" placeholder="Email"
                  class="password-child @error('email') is-invalid @enderror" style="padding-left: 7%" autofocus value="{{ old('email') }}">
          </div>
        </div>
    </form>
      </div>
      <div class="kembali">Kembali</div>
      <i class="nyuci-in1">Nyuci-in</i>
    </div>
  </body>
</html>
