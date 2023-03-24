<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="{{ asset('css/global3.css') }}" />
    <link rel="stylesheet" href="{{asset('css/homepage-chuy.css')}}" />
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
    <div class="homepage-chuy">
      <div class="group4">
        <div class="rectangle4"></div>
        <b class="sign-up4">Sign Up</b>
      </div>
      <div class="rectangle5"></div>
      <b class="red-reshine">RED +, Reshine Every Detail</b>
      <div class="auto-layout-horizontal3">
        <div class="booking-sekarang">Home</div>
        <div class="booking-sekarang">List Jasa Cuci</div>
        <div class="riwayat5" id="riwayatText">Riwayat</div>
        <div class="booking-sekarang">Contact</div>
      </div>
      <div class="cuci-mobil-red-container">
        <p class="cuci-mobil-red">
          Cuci Mobil Red + adalah jaringan tempat cuci motor yang menyediakan
          berbagai layanan pencucian dan perawatan kendaraan sepeda motor.
          Tempat ini memiliki banyak cabang yang tersebar di beberapa kota besar
          di Indonesia.
        </p>
        <p class="cuci-mobil-red">
          Cuci Mobil Red +menawarkan berbagai jenis layanan pencucian kendaraan
          sepeda motor, termasuk mencuci kendaraan dengan sabun, mencuci mesin,
          dan penggunaan air yang bersih dan aman untuk lingkungan. Selain itu,
          mereka juga menyediakan layanan tambahan seperti perawatan mesin,
          pemeriksaan teknis, dan penggantian suku cadang yang rusak.
        </p>
      </div>
      <div class="group-parent">
        <div class="frame-parent">
          <img class="frame-icon5" alt="" src="./public/frame5.svg" /><b
            class="b2"
            >4.5</b
          >
        </div>
        <div class="jl-temanggung-barat">Jl. Temanggung barat no. 27</div>
        <img class="vector-icon17" alt="" src="./public/vector6.svg" />
      </div>
      <img class="rectangle-icon3" alt="" src="./public/rectangle1@2x.png" />
      <div class="homepage-chuy-child"></div>
      <img class="vector-icon18" alt="" src="./public/vector7.svg" /><b
        class="fasilitas-yang-disediakan"
        >Fasilitas yang disediakan: </b
      ><b class="harga">Harga</b>
      <div class="booking-sekarang-wrapper" id="frameContainer1">
        <b class="booking-sekarang">Booking Sekarang</b>
      </div>
      <div class="free-wifi">Free Wifi</div>
      <div class="kamar-mandi">Kamar Mandi</div>
      <div class="rest-area">Rest Area</div>
      <img
        class="mingcuterest-area-line-icon"
        alt=""
        src="./public/mingcuterestarealine.svg"
      />
      <div class="rp-45000">Rp. 45,000</div>
      <img class="vector-icon19" alt="" src="./public/vector8.svg" />
      <div class="homepage-chuy-item"></div>
      <img
        class="mdiuser-circle-icon"
        alt=""
        src="./public/mdiusercircle.svg"
      /><img
        class="mdiuser-circle-icon1"
        alt=""
        src="./public/mdiusercircle.svg"
      /><img
        class="mdiuser-circle-icon2"
        alt=""
        src="./public/mdiusercircle1.svg"
      /><img
        class="mdiuser-circle-icon3"
        alt=""
        src="./public/mdiusercircle1.svg"
      /><b class="list-yang-sudah">List yang sudah booking</b>
      <div class="rendi-chuy-parent">
        <div class="booking-sekarang">Rendi Chuy</div>
        <div class="pukul-1000">Pukul 10.00</div>
      </div>
      <div class="renda-chuy">Renda Chuy</div>
      <div class="rendu-chuy">Rendu Chuy</div>
      <div class="rendo-chuy">Rendo Chuy</div>
      <div class="pukul-1100">Pukul 11.00</div>
      <div class="pukul-1200">Pukul 12.00</div>
      <div class="pukul-1300">Pukul 13.00</div>
      <i class="nyuci-in">Nyuci-in</i>
    </div>

    <script>
      var riwayatText = document.getElementById("riwayatText");
      if (riwayatText) {
        riwayatText.addEventListener("click", function (e) {
          window.location.href = "./riwayat.html";
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
