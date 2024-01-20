@extends('layouts.app')

@section('title')
Store Homepage
@endsection
@section('content')
<div class="page-content page-home">
  <section class="hero">
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="images/gmbr sayur.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy" />
        </div>
        <div class="col-lg-6">
          <h5 class="lh-1 mb-3">Selamat Datang di Argha Hidroponik</h5>
          <h1 class="display-5 fw-bold lh-1 mb-3">
            Pilih Sayuran Favorit Anda
          </h1>
          <p class="lead">
            Rasakan hidup sehat dengan makan sayuran. itu akan meningkatkan
            ruang hidup Anda!
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-hero btn-md px-4 me-md-2">
              Klik ke Troli
            </button>
            <button type="button" class="btn btn-hero btn-md px-4 me-md-2">
              Tentang Kami
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- consultant -->

  <section class="store-consultant">
    <div class="container">
      <div class="container mt-5 set-height">
        <div class="row justify-content-center align-items-stretch">
          <div class="col-6 col-md-3 col-lg-3 p-md-0 mb-5">
            <div class="card card-consultant">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title card-title-consultant">
                  ARGHA HIDROPONIK CONSULTATION
                </h5>
                <p class="card-text card-text-consultant">
                  Consult anything you want to ask us. We're glad you asked,
                </p>
                <a href="#" class="">Read More ></a>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4 col-lg-3 p-md-0 mb-5">
            <div class="card card-consultant">
              <img src="/images/img-consultant.jpg" class="card-img-top" alt="..." />
              <div class="card-img-overlay d-flex flex-column justify-content-end">
                <h5 class="card-title text-white card-title-consultant">
                  ARGHA HIDROPONIK CONSULTATION >
                </h5>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-3 col-lg-3 p-md-0 mb-5">
            <div class="card card-consultant">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title card-title-consultant">
                  ARGHA HIDROPONIK CONSULTATION
                </h5>
                <p class="card-text card-text-consultant">
                  Consult anything you want to ask us. We're glad you asked,
                </p>
                <a href="#" class="">Read More ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- argha hidroponik profile -->

  <section class="argha-profile">
    <div class="container pt-lg-5">
      <div class="row justify-content-center">
        <div class="col-sm-12 col-md-5 col-lg-4 p-4">
          <img src="images/foto-profile.jpg" alt="profile picture argha hidroponik" class="img-fluid img-profile" />
        </div>
        <div class="col col-md-6 col-lg-7 p-4">
          <h5 class="">
            NOT ONLY VEGETABLES! We Also Provide Planting Media For Tose of
            You Who Want to Learn Hydroponics
          </h5>
          <p>
            For those of you who want to learn hydroponic cultivation, Argha
            Hydroponics provides a complete beginner hydroponic package. The
            media and tools can also be purchased individually.
          </p>
          <p>
            For those of you who want to learn hydroponic cultivation, Argha
            Hydroponics provides a complete beginner hydroponic package.
          </p>
          <div class="row">
            <div class="col col-6">
              <ul class="list-unstyled">
                <li>
                  <i class="fa-solid fa-circle-check" style="color: #185350"></i>
                  aaskjdkasjsd
                </li>
                <li>
                  <i class="fa-solid fa-circle-check" style="color: #185350"></i>
                  aaskjdkasjsd
                </li>
                <li>
                  <i class="fa-solid fa-circle-check" style="color: #185350"></i>
                  aaskjdkasjsd
                </li>
              </ul>
            </div>
            <div class="col col-6">
              <ul class="list-unstyled">
                <li>
                  <i class="fa-solid fa-circle-check" style="color: #185350"></i>
                  aaskjdkasjsd
                </li>
                <li>
                  <i class="fa-solid fa-circle-check" style="color: #185350"></i>
                  aaskjdkasjsd
                </li>
                <li>
                  <i class="fa-solid fa-circle-check" style="color: #185350"></i>
                  aaskjdkasjsd
                </li>
              </ul>
            </div>
          </div>
          <div class="row experience">
            <div class="col">
              <h3>5Y</h3>
              <p>Experience</p>
            </div>
            <div class="col">
              <h3>25+</h3>
              <p>Best Product</p>
            </div>
            <div class="col">
              <h3>400+</h3>
              <p>Client</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- new product -->

  <section class="store-new-product">
    <div class="container">
      <div class="row">
        <div class="col-12 title-new-product" data-aos="fade-up" data-aos-delay="100">
          <h5>Best Seller</h5>
          <h2>ARGHA HIDROPONIK</h2>
        </div>
      </div>
      <div class="row justify-content-evenly">
        <div class="col-5 col-md-3 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <a href="/details.html" class="component-product d-block">
            <div class="product-tumbnail">
              <div class="product-image" style="background-image: url('/images/sawi-hijau.jpg')"></div>
            </div>
            <div class="product-text">Sayur Hijau</div>
            <div class="product-price">$10</div>
          </a>
        </div>
        <div class="col-5 col-md-3 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <a href="/details.html" class="component-product d-block">
            <div class="product-tumbnail">
              <div class="product-image" style="background-image: url('/images/pic.jpg')"></div>
            </div>
            <div class="product-text">Sayur Hijau</div>
            <div class="product-price">$10</div>
          </a>
        </div>
        <div class="col-5 col-md-3 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <a href="/details.html" class="component-product d-block">
            <div class="product-tumbnail">
              <div class="product-image" style="background-image: url('/images/sawi-hijau.jpg')"></div>
            </div>
            <div class="product-text">Sayur Hijau</div>
            <div class="product-price">$10</div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- about -->

  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1">
          </iframe>
        </div>
        <div class="col">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
            vitae laborum similique error alias in iusto aut suscipit
            dolorum dicta enim non, incidunt et quia, tenetur maxime cum
            ipsum minima!
          </p>
        </div>
        <div class="col">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
            atque laborum deserunt odio commodi, nihil necessitatibus ea
            itaque dolorum pariatur fugiat, culpa quidem architecto minima
            non amet voluptatibus unde minus?
          </p>
          <div class="d-flex justify-content-end">
            <a href="#" class="btn more-button">MORE ABOUT US <span> > </span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- monitoring -->
  <section class="monitoring">
    <div class="container">
      <div class="row">
        <div class="col">
          <h5 class="pemantauan-border-bottom">Pemantauan</h5>
          <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col-6 col-md-4">
              <div class="border p-2">
                <h6>PH</h6>
                <h3 id="phValue">5 <span></span></h3>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="border p-2 mb-4">
                <h6>TDS</h6>
                <h3 id="tdsValue">305 <span>PPM</span></h3>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center mt-0 mb-4">
              <div class="card-text d-flex flex-column align-items-center">
                <span class="text-muted">Jam</span>
                <span id="hour" class="border">21</span>
              </div>
              <span class="mx-2 mt-3 d-flex align-items-center colon">:</span>
              <div class="card-text d-flex flex-column align-items-center">
                <span class="text-muted">Menit</span>
                <span id="minute" class="border">38</span>
              </div>
              <span class="mx-2 mt-3 d-flex align-items-center colon">:</span>
              <div class="card-text d-flex flex-column align-items-center">
                <span class="text-muted">Detik</span>
                <span id="second" class="border">52</span>
              </div>
            </div>
          </div>

          <div class="row row-cols-1  ">
            <div class="col-6 col-md-4">
              <div class="border p-2">
                <h6>Suhu Air</h6>
                <h3 id="suhuAirValue">35 <span>°C</span></h3>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="border p-2 mb-4">
                <h6>Tinggi Air</h6>
                <h3 id="tinggiAirValue">434 <span>cm</span></h3>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="border p-2 mb-4">
                <h6>Keterangan</h6>
                <h3 id="keteranganValue">Air Penuh!</h3>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="row mt-5 pemasaran">
        <h5 class="text-center mt-4">Pemasaran</h5>
        <div class="col-6 col-md-3 mt-3">
          <p>Tokopedia :</p>
          <p>Argha Hidroponik</p>
        </div>
        <div class="col-6 col-md-3 mt-3">
          <p>Shopee :</p>
          <p>Argha Hidroponik</p>
        </div>
        <div class="col-6 col-md-3 mt-3">
          <p>Bukalapak :</p>
          <p>Argha Hidroponik</p>
        </div>
        <div class="col-6 col-md-3 mt-3">
          <p>lazada :</p>
          <p>Argha Hidroponik</p>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('addon-script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  // monitoring
  function fetchData() {
    $.ajax({
      url: 'http://127.0.0.1:8000/api/api-update-realtime/1',
      type: 'GET',
      success: function(response) {
        $('#phValue').html(response.ph + ' <span></span>');
        $('#tdsValue').html(response.tds + ' <span>PPM</span>'); // Pastikan ada elemen dengan id="tdsValue"
        $('#suhuAirValue').html(Math.round(response.suhu_air) + ' <span>°C</span>'); // Pastikan ada elemen dengan id="suhuAirValue"
        $('#tinggiAirValue').html(response.tinggi_air + ' <span>cm</span>'); // Pastikan ada elemen dengan id="tinggiAirValue"
        $('#keteranganValue').html(response.keterangan); // Pastikan ada elemen dengan id="keteranganValue"


      },
      error: function() {
        console.log('Gagal mengambil data');
      }
    });
  }

  // Jalankan fungsi ini secara berkala jika Anda ingin pembaruan real-time, misal setiap 5 detik
  setInterval(fetchData, 2000);
</script>
@endpush