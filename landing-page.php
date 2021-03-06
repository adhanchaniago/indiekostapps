<?php 
  include 'actions/koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>

  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- leaflet css -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin="" />

  <!-- leaflet js -->
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
    integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
    crossorigin=""></script>

  <!-- custom css -->
  <link rel="stylesheet" href="css/style.css">

  <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Raleway&display=swap" rel="stylesheet">

  <!-- fontawesome icon -->
  <script src="https://kit.fontawesome.com/9afba118d6.js" crossorigin="anonymous"></script>

  <title>INDIEKOS | Landing Page</title>
</head>

<body>
  <!-- navbar -->
  <header id="header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">INDIEKOST</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link item-scroll" id="btn-tentang" href="#tentang">Tentang</a>
            <a class="nav-item nav-link item-scroll" id="btn-keunggulan" href="#keunggulan">Keunggulan</a>
            <a class="nav-item nav-link item-scroll" id="btn-testimoni" href="#testimoni">Testimoni</a>
            <a class="nav-item btn btn-light tombol tombol-nav" href="pages/sign-up.php" tabindex="-1"
              aria-disabled="true">Daftar</a>
            <a class="nav-item btn btn-light tombol tombol-nav" href="pages/sign-in.php" tabindex="-1"
              aria-disabled="true">Masuk</a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- navbar end -->

  <main>

  <?php 

  $query = "SELECT * FROM info_kost";
  $result = mysqli_query($conn, $query);

  while ($data = mysqli_fetch_array($result)) {

  ?>

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-atas jumbotron-fluid" id="jumbotron">
      <div class="container banner-tittle">
        <h3>WELCOME</h3>
        <h1 class="display-4 text-uppercase">RUMAH <?php echo $data['nama_kost']; ?></h1>
        <p class="lead"><?php echo $data['deskripsi_kost']; ?></p>
        <a href="pages/kamar-tersedia.php" class="btn up-1 btn-gradient">Cek Ketersediaan Kamar</a>
      </div>
    </div>
    <!-- jumbotron -->

  <?php } ?>

    <section id="tentang">
    <!-- tentang -->
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h2 class="tentang pt-5">Rumah Kost Ini Menggunakan Layanan <span class="biru">INDIEKOS</span> <br>
            Software Pengelolaan Rumah Kost. <span class="biru">Simple, Fleksibel, Mudah Digunakan</span>
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p class="text-muted text-center mt-2 ">Mengapa pemilik kost perlu INDIEKOST?</p>
        </div>
      </div>
      <div class="row">
        <div class="col col-12 col-md-6 pb-3">
          <!-- img preview1 -->
          <img src="img/preview1.jpg" class="img-fluid mt-n3" alt="Indiekost Mockup">
        </div>
        <div class="col col-12 col-md-6 pt-md-3 mt-md-5 pr-5">
          <!-- deskripsi -->
          <h4 class="font-weight-bold">Diperlukan Untuk Mengelola Rumah Kos Secara Mandiri</h4>
          <p class="text-muted">Integrasi semua operasi penting dalam satu platform</p>
          <p class="font-weight-bold text-break">
            <i class="fas fa-check-circle text-success"></i> Pengelolaan Kamar dan Penghuni/Penyewa <br>
            <i class="fas fa-check-circle text-success"></i> Booking <br>
            <i class="fas fa-check-circle text-success"></i> Laporan keuangan & Laba-rugi <br>
            <i class="fas fa-check-circle text-success"></i> Inventarisasi

          </p>
          <p class="text-muted">Anda bisa mendapatkan informasi terkini secara <span
              class="font-weight-bold font-italic text-muted text-break">real time</span>, kapan saja, dimana saja</p>
        </div>
      </div>
    </div>
    </section>
    <!-- tentang -->

    <!-- keunggulan atas-->
    <div class="container-fluid bg-light pt-5 pb-4">
      <div class="container">
        <div class="row">
          <!-- kiri -->
          <div class="col col-12 col-md-6">
            <!-- kiri atas -->
            <div class="row">
              <div class="col col-2">
                <i class="fas fa-shield-alt ikon-besar"></i>
              </div>
              <div class="col col-10">
                <h6 class="font-weight-bold">Mencegah Kecurangan Biaya & Pendapatan</h6>
                <p class="text-muted">
                  Catatan booking, pemasukan, dan pengeluaran tercatat rapi sehingga akan meminimalisir
                  kecurangan
                </p>
              </div>
            </div>

            <!-- kiri bawah -->
            <div class="row mt-md-4">
              <div class="col col-2">
                <i class="fas fa-clock ikon-besar"></i>
              </div>
              <div class="col col-10">
                <h6 class="font-weight-bold">Full Online 24-Jam</h6>
                <p class="text-muted">
                  Dimana pun lokasi kost Anda, manajemen dan perkembangan bisnis bisa diakses secara realtime
                </p>
              </div>
            </div>
          </div>

          <!-- kanan -->
          <div class="col col-12 col-md-6">
            <!-- kanan atas -->
            <div class="row">
              <div class="col col-2">
                <i class="fas fa-chart-line ikon-besar"></i>
              </div>
              <div class="col col-10">
                <h6 class="font-weight-bold">Meningkatkan Hunian Kost</h6>
                <p class="text-muted">
                  INDIEKOST membantu meningkatkan hunian kost. Kami juga memampangkan informasi tentang rumah kost Anda
                  di halaman Homepage, sebagai bussiness profile dari rumah kost Anda
                </p>
              </div>
            </div>

            <!-- kanan bawah -->
            <div class="row">
              <div class="col col-2">
                <i class="fas fa-shopping-cart ikon-besar"></i>
              </div>
              <div class="col col-10">
                <h6 class="font-weight-bold">Reservasi Online</h6>
                <p class="text-muted">
                  Reservasi bisa dilakukan secara Online, kapan saja dan dimana saja
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- keunggulan atas-->

    <div class="container bg-keunggulan" id="keunggulan">
      <!-- keuunggulan deskripsi -->
      <div class="row mt-5">
        <div class="container">
          <h5 class="font-weight-bold text-center">Keunggulan INDIEKOST</h5>
          <p class="text-muted text-center">INDIEKOST merupakan aplikasi pengelola rumah kos berbasis online (WEB) yang
            akan membantu meningkatkan produktivitas usaha Anda. Satu aplikasi, banyak solusi. <span
              class="text-ungu font-weight-bold">Didesain untuk orang awam IT</span></p>
        </div>
      </div>

      <!-- keunggulan dengan gambar -->
      <div class="row mt-3 pb-5">
        <!-- kiri -->
        <div class="col col-12 col-md-6">

          <div class="row">
            <div class="col col-2">
              <div class="lingkar">1</div>
            </div>
            <div class="col col-10">
              <h6 class="font-weight-bold ml-2">Sistem yang handal dan lengkap</h6>
              <p class="text-muted ml-2">Tersedia semua hal yang Anda butuhkan untuk mengelola rumah kos Anda</p>
            </div>
          </div>

          <div class="row">
            <div class="col col-2">
              <div class="lingkar mt-2">2</div>
            </div>
            <div class="col col-10">
              <h6 class="font-weight-bold ml-2">Multi device, multi platform</h6>
              <p class="text-muted ml-2">Yang Anda butuhkan hanyalah koneksi internet dan web browser. Aplikasi dapat
                diakses dari mana saja dan kapan saja</p>
            </div>
          </div>

          <div class="row">
            <div class="col col-2">
              <div class="lingkar mt-2">3</div>
            </div>
            <div class="col col-10">
              <h6 class="font-weight-bold ml-2">Mudah digunakan</h6>
              <p class="text-muted ml-2">Tampilan tatap muka didesain sedemikian rupa sehingga mudah digunakan oleh
                pengguna. Dan memenuhi standar UI/UX yang ada</p>
            </div>
          </div>
        </div>

        <!-- kanan -->
        <div class="col col-12 col-md-6">
          <img src="img/preview2.png" class="img-fluid mt-n3 scale" alt="Indiekost Mockup">
        </div>
      </div>
    </div>


    <!-- testimoni -->
    <!-- jumbotron -->
    <div class="jumbotron testimoni jumbotron-fluid" id="testimoni">
      <div class="container item">
        <div class="row">
          <div class="col-12">
            <h2 class="text-light text-center font-weight-bold">Testimoni</h2>
            <p class="text-center text-light">Apa kata mereka yang telah menggunakan INDIEKOST</p>
          </div>
        </div>
        <div class="row">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="testmonial_slider_area text-center owl-carousel">
                  <div class="row">
                    <div class="col col-12 col-md-6">
                      <div class="single_testimonial">
                        <div class="pic">
                          <img src="images/abduljali.jpg" style="height : 70px" alt="">
                        </div>
                        <h5 class="testimonial-title">Abdul Jali</h5>
                        <span class="test_designation">Pemilik Kost Putri Bidadari</span>
                        <p class="text-muted">
                         Saya tertarik untuk menggunakan, karena  saya memiliki banyak kost saya fikir akan sangat terbantu untuk merekap pengeluaran, pemasukan, serta melakukan tagihan kepada penghuni kost. Saran saya segera direalisasikan agar orang tua seperti kami dapat merasakan kemudahan ini.
                        </p>
                      </div><!-- end Single Testimonials -->
                    </div>

                    <div class="col col-12 col-md-6">
                      <div class="single_testimonial">
                        <div class="pic">
                          <img src="images/ibucahyani.jpeg" style="height : 70px" alt="">
                        </div>
                        <h5 class="testimonial-title">Ibu Cahyani</h5>
                        <span class="test_designation">Pemilik Kost Niyan</span>
                        <p class="text-muted">
                          Saya mencoba dan saya merasa sangat dibantu untuk Manajemen Keuangan. Meskipun perlu banyak penyempurnaan contohnya pada laporan, namun menurut saya jka sudah sempurna akan terasa manfaatnya.
                        </p>
                      </div><!-- end Single Testimonials -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jumbotron -->
    <!-- testimoni -->


    <!-- bergabung -->
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h2 class="text-center font-weight-bolder mt-3 mb-3">BERGABUNG DENGAN INDIEKOST SEKARANG</h2>
        </div>
      </div>
      <div class="row">
        <a href="https://api.whatsapp.com/send?phone=6281555997843" target="_blank" class="btn btn-gradient-big mb-5">BERGABUNG</a>
      </div>
    </div>
    <!-- bergabung -->
  </main>

  <!-- footer -->
  <footer>
    <!-- footer atas -->
    <div class="container-fluid bg-dark text-light m-0 pt-4 pl-3">
      <div class="row">
        <div class="col col-12 col-md-3">
          <h5 class="text-white font-weight-bold h6 mt-2">Apa itu INDIEKOST?</h5>
          <p class="text-light smaller-text h6">INDIEKOST adalah software aplikasi customer managemen relationship (CRM) untuk kos-kosan berbasis cloud (internet) sehingga memudahkan anda dalam mengelola bisnis. Dirancang simpel untuk orang awam, sehingga mudah digunakan, semudah menggunakan handphone. Saat ini Halokos juga sebagai operator kos-kosan. Kami membantu klien yang ingin bisnis kos-kosan tapi tidak memiliki waktu dan keahlian yang memadai.</p>
        </div>
        <div class="col col-12 col-md-3">
          <h5 class="text-white font-weight-bold h6 mt-2">Mengapa Rumah Kost Putri Bidadari Bergabung?</h5>
          <p class="text-light smaller-text h6">Aplikasi ini membantu pengelolaan dan pembukuan rumah kost. Dapat diakses kapan saja, dimana saja, dan mudah digunakan. Semua transaksi terlacak dan tercatat rapih. Aplikasi ini adalah solusi bagi pengelolaan rumah kost untuk lebih modern dan rapih</p>
        </div>

        <?php 

        $query = "SELECT * FROM info_kost";
        $result = mysqli_query($conn, $query);

        while ($data = mysqli_fetch_array($result)) {

        ?>

        <div class="col col-12 col-md-3 footer-atas">
          <h5 class="text-light font-weight-bold h6 mt-2">Rumah <?php echo $data['nama_kost']; ?></h5>
          <p class="text-light smaller-text h6">
          <i class="fas fa-map mr-1"></i>  <?php echo $data['alamat_kost']; ?>, <?php echo $data['kota_kost'];?>, <?php $data['provinsi_kost']; ?>
          </p>
          <p class="text-light smaller-text h6">
            <i class="fas fa-phone-alt mr-1"></i> 
            <?php echo $data['no_kost']; ?>
          </p>
          <p class="text-light smaller-text h6">
            <i class="fas fa-envelope mr-1"></i> 
            <?php echo $data['email_kost']; ?>
          </p>
        </div>

        <?php } ?>

        <div class="col col-12 col-md-3">
          <div id="mapid" class="mt-2"></div>
        </div>
      </div>
      <div class="row footer-bawah pt-3 pl-3 mt-3">
        <p class="text-muted">Powered by TeknoTirta</p>
      </div>
    </div> <!-- akhir footer atas -->
            </footer>

  <d iv class="button-up">
    <i class="fas fa-arrow-circle-up"></i>
    </div>

    <!--        Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

  <script>
    var mymap = L.map('mapid').setView([-8.156050, 113.720791], 15);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(mymap);


    var marker = L.marker([-8.156050, 113.720791]).addTo(mymap);

    marker.bindPopup("<b>Rumah Kost Putri Bidadari!</b><br>Baturaden 10").openPopup();


    // Header scroll class
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('#header').addClass('header-scrolled');
      } else {
        $('#header').removeClass('header-scrolled');
      }
    });

    if ($(window).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    }

    <?php 

    $query = "SELECT * FROM info_kost";
    $result = mysqli_query($conn, $query);

    while ($data = mysqli_fetch_array($result)) {

    ?>

    $(function(){
      $(".jumbotron-atas").css({"background-image": "url(img/<?php echo $data['foto_kost'] ?>)"})
    })
    
    <?php } ?>


  </script>
</body>

</html>