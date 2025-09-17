<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Reem Kufi Ink:wght@400;700&display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700&display=swap" />
</head>

<body>
    @auth
    @else
    <ul>
      <li>
          <a href="/login" class="nav-link"></a>
      </li>
    </ul>
    @endauth
    <div class="homepage-chuy">
        <img class="vector-icon" alt="" src="{{ asset('gambar/vector@2x.png') }}" />
        <div class="group">
            <div class="rectangle"></div>
            <b class="cari">Cari</b>
        </div>
        <!--<img class="frame-icon" alt="" src="
            {{ asset('gambar/frame.svg') }}" />
        -->
        <div class="auto-layout-horizontal">
            <b class="home">Home</b><b class="home">List Jasa Cuci</b>
            <div class="home">Riwayat</div>
            <div class="home">Contact</div>
        </div>
        <div class="group1">
            <div class="rectangle1">
                @if (Auth::check())
                <form method="POST" action="{{ url('/logout') }}">
                    {{ csrf_field() }}
                    <button type="submit" class="rectangle1 sign-up">Logout</button>
                </form>
                @endif
            </div>
        </div>
        <div class="group2">
            <div class="cari-tempat-pencucian-parent">
                <b class="cari-tempat-pencucian">Cari tempat pencucian</b>
                <img class="group-icon" alt="" src="{{ asset('gambar/group.svg') }}" />
            </div>
        </div>
        <div class="rectangle2"></div>
        <b class="daftar-cuci-kendaraan">Daftar Cuci Kendaraan</b><img class="rectangle-icon" alt=""
            src="{{ asset('gambar/rectangle@2x.png') }}" />
        <div class="auto-layout-horizontal1">
            <b class="home">Product</b><b class="home">Company</b><b class="home">Contact Us</b>
        </div>
        <div class="auto-layout-vertical">
            <div class="home">Home</div>
            <div class="home">About</div>
            <div class="home">Find Hotel</div>
            <div class="home">Facilities</div>
        </div>
        <div class="auto-layout-vertical1">
            <div class="home">T.O.S</div>
            <div class="home">Privacy Policy</div>
            <div class="home">Careers</div>
            <div class="home">FAQ</div>
        </div>
        <div class="auto-layout-vertical2">
            <div class="home">abcdefg@gmail.com</div>
            <div class="home">+1-50-4855-485</div>
            <div class="home">8993 St. of street</div>
        </div>
        <div class="auto-layout-vertical3">
            <b class="home">Surya Satria Car Wash Malang</b>
            <div class="teks">
                <div class="lorem-ipsum-dolor">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna
                </div>
            </div>
            <div class="auto-layout-horizontal2"><b class="home">Visit Now</b></div>
        </div>
        <div class="auto-layout-vertical4">
            <b class="home">WR Car Wash Malang</b>
            <div class="teks">
                <div class="lorem-ipsum-dolor">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna
                </div>
            </div>
            <div class="auto-layout-horizontal2"><b class="home">Visit Now</b></div>
        </div>
        <div class="auto-layout-vertical5">
            <div class="auto-layout-horizontal4">
                <b class="home">AutoJoss Car Wash Malang</b>
                <div class="auto-layout-horizontal5">
                    <b class="home">Visit Now</b>
                </div>
            </div>
            <div class="lorem-ipsum-dolor2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna
            </div>
        </div>
        <img class="rectangle-icon1" alt="" src="{{ asset('gambar/rectangle1.png') }}" /><img class="rectangle-icon2"
            alt="" src=" gambar/rectangle2@2x.png" /><img class="frame-icon1" alt=""
            src=" gambar/frame1.svg" />
        <div class="line"></div>
        <img class="frame-icon2" alt="" src="{{ asset('gambar/frame2.png') }}" /><img class="frame-icon3" alt=""
            src=" {{ asset('gambar/frame3.svg') }}" /><img class="frame-icon4" alt="" src=" {{ asset('gambar/frame4.svg') }}" /><b
            class="cucikan-kendaraan-anda">Cucikan Kendaraan Anda</b><b class="tempat-cuci-kendaraan-container">
            <p class="tempat-cuci">Tempat cuci</p>
            <p class="kendaraan-paling-populer">kendaraan paling populer</p>
        </b>
        <div class="list-carwash">
            <div class="auto-layout-horizontal6">
                <div class="div1">
                    <img class="rectangle-icon3" alt="" src="{{ asset('gambar/rectangle3@2x.png') }}" />
                    <div class="nama-dan-love">
                        <b class="home">Red devil gg coy</b><img class="vector-icon1" alt=""
                            src=" {{ asset('gambar/vector1.svg') }}" />
                    </div>
                    <b class="b">4.5</b><b class="rp-45000">Rp. 45,000</b>
                    <div class="jl-berdua-dengan">Jl. Berdua dengan mu</div>
                    <div class="buka-jam-0900-1700">Buka Jam 09.00-17.00</div>
                    <img class="frame-icon5" alt="" src=" {{ asset('gambar/frame5.svg') }}" />
                    <div class="rectangle3"></div>
                    <b class="booking-sekarang">Booking Sekarang</b>
                </div>
                <div class="div1">
                    <img class="rectangle-icon3" alt="" src="{{ asset('gambar/rectangle4@2x.png') }} " />
                    <div class="nama-dan-love">
                        <b class="home">Carwash 69</b><img class="vector-icon1" alt=""
                            src="{{ asset('gambar/vector2.png') }}" />
                    </div>
                    <b class="b">4.5</b><b class="rp-40000">Rp. 40,000</b>
                    <div class="jl-berdua-dengan">Jl. Jalan ke masjid ambil berkat</div>
                    <div class="buka-jam-0900-1700">Buka Jam 08.00-17.00</div>
                    <img class="frame-icon5" alt="" src="{{ asset('gambar/frame6.svg') }}" />
                    <div class="rectangle3"></div>
                    <b class="booking-sekarang">Booking Sekarang</b>
                </div>
                <div class="div1">
                    <img class="rectangle-icon3" alt="" src="{{ asset('gambar/rectangle5@2x.png') }}" />
                    <div class="nama-dan-love">
                        <b class="home">Juragan Cuci Mobil</b><img class="vector-icon1" alt=""
                            src="{{ asset('gambar/vector3.svg') }} " />
                    </div>
                    <b class="b">4.5</b><b class="rp-50000">Rp. 50,000</b>
                    <div class="jl-berdua-dengan">Jl. Jalan ke mixue</div>
                    <div class="buka-jam-0900-1700">Buka Jam 09.00-17.00</div>
                    <img class="frame-icon5" alt="" src="{{ asset('gambar/frame7.svg') }}" />
                    <div class="rectangle3"></div>
                    <b class="booking-sekarang">Booking Sekarang</b>
                </div>
            </div>
            <div class="auto-layout-horizontal6">
                <div class="div1">
                    <img class="rectangle-icon3" alt="" src="{{ asset('gambar/rectangle6@2x.png') }}" />
                    <div class="nama-dan-love">
                        <b class="home">Red devil gg coy</b><img class="vector-icon1" alt=""
                            src=" {{ asset('gambar/vector4.svg') }}" />
                    </div>
                    <b class="b">4.5</b><b class="rp-45000">Rp. 45,000</b>
                    <div class="jl-berdua-dengan">Jl. Berdua dengan mu</div>
                    <div class="buka-jam-0900-1700">Buka Jam 09.00-17.00</div>
                    <img class="frame-icon5" alt="" src=" {{ asset('gambar/frame8.svg') }}" />
                    <div class="rectangle3"></div>
                    <b class="booking-sekarang">Booking Sekarang</b>
                </div>
                <div class="div1">
                    <img class="rectangle-icon3" alt="" src="{{ asset('gambar/rectangle7@2x.png') }}" />
                    <div class="nama-dan-love">
                        <b class="home">Carwash 69</b><img class="vector-icon1" alt=""
                            src=" {{ asset('gambar/vector5.svg') }}" />
                    </div>
                    <b class="b">4.5</b><b class="rp-40000">Rp. 40,000</b>
                    <div class="jl-berdua-dengan">Jl. Jalan ke masjid ambil berkat</div>
                    <div class="buka-jam-0900-1700">Buka Jam 08.00-17.00</div>
                    <img class="frame-icon5" alt="" src=" {{ asset('gambar/frame9.svg') }}" />
                    <div class="rectangle3"></div>
                    <b class="booking-sekarang">Booking Sekarang</b>
                </div>
                <div class="div1">
                    <img class="rectangle-icon3" alt="" src="gambar/rectangle8@2x.png" />
                    <div class="nama-dan-love">
                        <b class="home">Juragan Cuci Mobil</b><img class="vector-icon1" alt=""
                            src=" {{ asset('gambar/vector6.svg') }}" />
                    </div>
                    <b class="b">4.5</b><b class="rp-50000">Rp. 50,000</b>
                    <div class="jl-berdua-dengan">Jl. Jalan ke mixue</div>
                    <div class="buka-jam-0900-1700">Buka Jam 09.00-17.00</div>
                    <img class="frame-icon5" alt="" src="{{ asset('gambar/frame10.svg') }} " />
                    <div class="rectangle3"></div>
                    <b class="booking-sekarang">Booking Sekarang</b>
                </div>
            </div>
            <div class="button-lihat-lebih"><b class="home">Lihat Lebih </b></div>
        </div>
    </div>
</body>

</html>
