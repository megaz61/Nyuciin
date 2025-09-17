<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./form-booking.css" />
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
    <div class="form-booking">
      <div class="form-booking-child"></div>
      <img
        class="form-booking-item"
        alt=""
        src="./public/rectangle-42.svg"
      /><img class="frame-icon3" alt="" src="./public/frame3.svg" />
      <div class="group2">
        <div class="rectangle2"></div>
        <b class="sign-up2">Sign Up</b>
      </div>
      <div class="auto-layout-horizontal2">
        <div class="home2">Home</div>
        <div class="home2">List Jasa Cuci</div>
        <div class="riwayat3" id="riwayatText">Riwayat</div>
        <div class="home2">Contact</div>
      </div>
      <div class="cancel-wrapper" id="frameContainer">
        <div class="cancel">Cancel</div>
      </div>
      <div class="booking-wrapper" id="frameContainer1">
        <div class="cancel">Booking</div>
      </div>
      <img class="image-1-icon" alt="" src="./public/image-1@2x.png" />
      <div class="telp">
        <div class="telp-child"></div>
        <div class="nomor">Isi nomor telepon</div>
        <div class="nomor-telepon">Nomor Telepon</div>
      </div>
      <div class="nama">
        <div class="telp-child"></div>
        <div class="nomor">Isi Nama Lengkap</div>
        <div class="nomor-telepon">Nama Lengkap</div>
      </div>
      <div class="tgl">
        <div class="telp-child"></div>
        <div class="nomor">dd/mm/yy</div>
        <img
          class="icsharp-date-range-icon"
          alt=""
          src="./public/icsharpdaterange.svg"
        />
        <div class="nomor-telepon">Tanggal Booking</div>
      </div>
      <div class="jam-booking">
        <div class="telp-child"></div>
        <div class="nomor">Pilih Jam Booking</div>
        <div class="nomor-telepon">Jam Booking</div>
      </div>
      <i class="form-booking1">Form Booking </i>
    </div>

    <script>
      var riwayatText = document.getElementById("riwayatText");
      if (riwayatText) {
        riwayatText.addEventListener("click", function (e) {
          window.location.href = "./riwayat.html";
        });
      }
      
      var frameContainer = document.getElementById("frameContainer");
      if (frameContainer) {
        frameContainer.addEventListener("click", function (e) {
          window.location.href = "./homepage-chuy.html";
        });
      }
      
      var frameContainer1 = document.getElementById("frameContainer1");
      if (frameContainer1) {
        frameContainer1.addEventListener("click", function (e) {
          window.location.href = "./booking-success.html";
        });
      }
      </script>
  </body>
</html>
