<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="{{asset('css/global2.css')}}" />
    <link rel="stylesheet" href="{{asset('css/daftar.css')}}" />

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
    <div class="daftar">
      <div class="daftar-inner">
        <div class="frame-group">
          <img class="frame-icon1" alt="" src="{{asset('gambar/frame1.svg')}}" />
          <div class="daftar-ke-parent">
            <div class="daftar-ke">Daftar ke</div>
            <b class="nyuci-in2">Nyuci-in</b>
          </div>
          <div class="jika-sudah-punya-akun-parent">
            <div class="jika-sudah-punya">Jika sudah punya akun</div>
            <div class="kamu-bisa1">
              <span>Kamu bisa</span><span class="span1"> </span>
            </div>
            <a href="/login" class="login-disini">Login disini !</a>
          </div>
        </div>
      </div>
      <div class="email-parent">
        <form action="/register" class="form-group" method="post" >
            @csrf
        <div class="email2">
          <div class="email-item">
                <input type="text" name="email" placeholder="Email" class="email-item @error('email') is-invalid @enderror"
                style="padding-left: 7%" autofocus value="{{ old('email') }}">
          </div>
          <div class="nama-lengkap"></div>
        </div>
        <div class="nama">
          <div class="email-item">
            <input type="text" name="nama" placeholder="Nama Lengkap" class="email-item @error('nama') is-invalid @enderror"
            style="padding-left: 7%" autofocus value="{{ old('nama') }}">
          </div>
        </div>
        <div class="nomor">
          <div class="email-item">
            <input type=”text” name="username" placeholder="Username" class="email-item @error('username') is-invalid @enderror"
            style="padding-left: 7%" autofocus value="{{ old('username') }}">
          </div>
        </div>
        <div class="password2">
          <div class="email-item">
            <input type=”tel” name="telpon" placeholder="Nomor telpon" class="email-item @error('telpon') is-invalid @enderror"
            style="padding-left: 7%" autofocus value="{{ old('telpon') }}">
          </div>
        </div>
        <div class="ulangi-password">
          <div class="email-item">
            <div class="email-item">
                <input type="password" name="password" placeholder="Password" class="email-item @error('password') is-invalid @enderror"
                style="padding-left: 7%" autofocus value="{{ old('password') }}">
              </div>
          </div>
        </div>
        <div class="login2">
          <div class="login-item">
                <button type="submit" value="daftar" class="login-item" style="color:white">Daftar</button>
          </div>
        </div>
        <div class="or-continue-with1">or continue with</div>
        <img class="akun-icon" alt="" src="{{asset('gambar/group-13.svg')}}" />
        <div class="daftar1">Daftar</div>
    </form>
      </div>
      <div class="kembali1">Kembali</div>
      <i class="nyuci-in3">Nyuci-in</i>
    </div>
  </body>
</html>
