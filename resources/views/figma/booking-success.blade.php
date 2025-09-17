<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="{{asset('css/global3.css')}}." />
    <link rel="stylesheet" href="{{asset('css/booking-success.css')}}" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Reem Kufi Ink:wght@400;700&display=swap"
    />
  </head>
  <body>
    <div class="booking-success">
      <div class="booking-success-child"></div>
      <img
        class="booking-success-item"
        alt=""
        src="./public/rectangle-43.svg"
      />
      <div class="booking-id3">Booking ID</div>
      <div class="lf3up-dp908-opiu7-jk91k3">LF3UP-DP908-OPIU7-JK91K</div>
      <div class="rieki-gaming">Rieki Gaming</div>
      <div class="carwash693">Carwash69</div>
      <div class="jl-jalan-ke">Jl. Jalan ke masjid ambil berkat</div>
      <div class="div3">15.00</div>
      <div class="username">Username</div>
      <div class="tempat-nyuci3">Tempat Nyuci</div>
      <div class="alamat">Alamat</div>
      <div class="jam-booking2">Jam Booking</div>
      <div class="booking-success-parent">
        <i class="booking-success1">Booking Success</i
        ><img class="artboard-3-1" alt="" src="./public/artboard-3-1@2x.png" />
      </div>
      <img class="frame-icon4" alt="" src="./public/frame4.svg" />
      <div class="group3">
        <div class="rectangle3"></div>
        <b class="sign-up3">Sign Up</b>
      </div>
      <div class="home3" id="homeText">Home</div>
      <div class="list-jasa-cuci3">List Jasa Cuci</div>
      <div class="riwayat4" id="riwayatText">Riwayat</div>
      <div class="contact3">Contact</div>
      <div class="booking-success-inner"></div>
      <div class="cancel-container">
        <div class="cancel1" id="cancelText">Cancel</div>
      </div>
      <div class="ganti-jadwal-wrapper" id="frameContainer1">
        <div class="ganti-jadwal">Ganti Jadwal</div>
      </div>
    </div>

    <script>
      var homeText = document.getElementById("homeText");
      if (homeText) {
        homeText.addEventListener("click", function (e) {
          // Please sync "Homepage chuy" to the project
        });
      }

      var riwayatText = document.getElementById("riwayatText");
      if (riwayatText) {
        riwayatText.addEventListener("click", function (e) {
          window.location.href = "./riwayat.html";
        });
      }

      var cancelText = document.getElementById("cancelText");
      if (cancelText) {
        cancelText.addEventListener("click", function (e) {
          window.location.href = "./homepage-chuy.html";
        });
      }

      var frameContainer1 = document.getElementById("frameContainer1");
      if (frameContainer1) {
        frameContainer1.addEventListener("click", function (e) {
          window.location.href = "./form-booking.html";
        });
      }
      </script>
  </body>
</html>
