<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Library</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="user/img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="user/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="user/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="user/img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="user/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="user/fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="user/css/style.css">
<link rel="stylesheet" type="text/css" href="user/css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="user/css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="corosel/css/owl.carousel.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="corosel/css/style.css">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">Library</a> </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">Tentang Web</a></li>
        <li><a href="#restaurant-menu" class="page-scroll">Daftar Buku</a></li>
        <li><a href="#portfolio" class="page-scroll">Peminjaman</a></li>
        <li><a href="#team" class="page-scroll">Tentang Kami</a></li>
        <li><form action="/logout" method="POST">
        @csrf
        <button class="btn btn-danger">{{ auth()->user()->name }} Logout</button>
    </form></li>
      </ul>

    </div>
    <!-- /.navbar-collapse -->
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>Library</h1>
            {{-- <p>Restaurant / Coffee / Pub</p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">Discover Story</a> </div> --}}
        </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 ">
        <div class="about-img"><img src="user/img/about.jpg" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Membaca Semakin Mudah</h2>
          <hr class="satu">
          <p>Baca Buku, berbagi koleksi bacaan dan bersosialisai secara bersamaan.
            Dimanapun, kapan pun dengan nyaman bersama setiap orang.
          </p>
          <h3>Jadilan Pribadi yang Kreatif dan Inovatif</h3>
          <p>Telurusi dan temukan bacaan yang anda inginkan.
            Jalinlah pertemanan dan saling berbagi buku yang kamu rekomendasikan.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Restaurant Menu Section -->
<div id="restaurant-menu">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Buku Terbaru</h2>
      <hr>
      <p>Daftar Buku di Library.</p>
    </div>
  </div>
<div class="card">
  <div class="card-body">
    <center><h2>DAFTAR BUKU</h2></center>
    <div class="owl-carousel owl-2">
        @php
                    $buku = DB::table('buku')->get();
                @endphp
        @foreach($buku as $b)
        <div class="media-29101">
          <a href="#"><img height="420" width="130" src="/user/img/buku/{{ $b->gambar }}" alt="Image" class="img-fluid"></a>
          <h3><a href="#">{{ $b->judul }}</a></h3>
        </div>
        @endforeach
      </div>
    </div></div></div><br>

<!-- Portfolio Section -->
<div id="portfolio">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Peminjaman</h2>
      <hr>
      <p>halaman Peminjaman.</p>
    </div>
  </div>
  <div class="container">
    <div class="card">
        <div class="card-body">
        <form action="/userr/store" method="post">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nomer Peminjaman</label>
                <input name="nomer" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nomer Peminjaman">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Peminjam</label>
                <input name="nama_peminjam" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama peminjam">
            </div>
            <div class="mb-3">
                <label for="id">Judul Buku :</label>
                <select name="id" class="form-control" id="id">
                    @php
                        $buku = DB::table('buku')->get();
                    @endphp
                @foreach($buku as $b)
                <option value="{{ $b->id }}">{{ $b->judul }}</option>
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="keterangan">Keterangan :</label>
                <select name="keterangan" class="form-control" id="keterangan">
                <option value="pinjam">Pinjam</option>
                <option value="kembali">Kembali</option>
                </select>
            </div>
            <?php
        $kembali    = date('Y-m-d', strtotime('+7 days', strtotime(date('Y-m-d')))); // penjumlahan tanggal sebanyak 7 hari
        ?>
        <input type="hidden" name="tanggal_k" value="<?php echo $kembali; ?>">
            <input type="hidden" name="created_at" value="<?php echo date('Y-m-d h:i:s'); ?>">
            <input type="hidden" name="updated_at" value="<?php echo date('Y-m-d h:i:s'); ?>">
            <br>
            <input type="submit" value="Pinjam">
        </form>
        </div>
      </div>
  </div>
</div>
<!-- Team Section -->
<div id="team" class="text-center">
    <div class="overlay">
      <div class="container">
        <div class="col-md-10 col-md-offset-1 section-title">
          <h2>ANGGOTA KELOMPOK</h2>
          <hr>
          <p>Berikut adalah nama anggota kelompok Ujian Akhir Semester (UAS) 5 mata kuliah Pemograman Web Lanjut</p>
        </div>
        <div id="row">
          <div class="col-md-6 team">
            <div class="thumbnail">
              <div class="team-img"><img src="user/img/niken.jpeg" alt="..."></div>
              <div class="caption">
                <h3>Niken Cahyaning Tyas</h3>
                <p>NIM : 20104410037</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 team">
            <div class="thumbnail">
              <div class="team-img"><img src="user/img/rizza.jpeg" alt="..."></div>
              <div class="caption">
                <h3>Rizza Maidatul Masfufah</h3>
                <p>NIM : 20104410024</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 team">
            <div class="thumbnail">
              <div class="team-img"><img src="user/img/devi.jpeg" alt="..."></div>
              <div class="caption">
                <h3>Devi  Budianti</h3>
                <p>NIM : 20104410034</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 team">
            <div class="thumbnail">
              <div class="team-img"><img src="user/img/ana.jpeg" alt="..."></div>
              <div class="caption">
                <h3>Nurliana Azizah</h3>
                <p>NIM : 20104410031</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Call Reservation Section -->
<div id="call-reservation" class="text-center">
    <div class="container">
      <h2> "Perpustakaan yang buruk membangun koleksi, perpustakaan yang baik membangun layanan, perpustakaan yang hebat membangun komunitas." - R. David Lankes</h2>
    </div>
  </div>
<div id="footer">
  <div class="container text-center">
    <div class="col-md-4">
      <h3>Address</h3>
      <div class="contact-item">
        <p>4321 California St,</p>
        <p>San Francisco, CA 12345</p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Opening Hours</h3>
      <div class="contact-item">
        <p>Mon-Thurs: 10:00 AM - 11:00 PM</p>
        <p>Fri-Sun: 11:00 AM - 02:00 AM</p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Contact Info</h3>
      <div class="contact-item">
        <p>Phone: +1 123 456 1234</p>
        <p>Email: info@company.com</p>
      </div>
    </div>
  </div>
  <div class="container-fluid text-center copyrights">
    <div class="col-md-8 col-md-offset-2">
      <div class="social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
      <p>&copy; 2016 Touché. All rights reserved. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
    </div>
  </div>
</div>
<script type="text/javascript" src="user/js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="user/js/bootstrap.js"></script>
<script type="text/javascript" src="user/js/SmoothScroll.js"></script>
<script type="text/javascript" src="user/js/nivo-lightbox.js"></script>
<script type="text/javascript" src="user/js/jquery.isotope.js"></script>
<script type="text/javascript" src="user/js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="user/js/contact_me.js"></script>
<script type="text/javascript" src="user/js/main.js"></script>

<script src="corosel/js/jquery-3.3.1.min.js"></script>
    <script src="corosel/js/popper.min.js"></script>
    <script src="corosel/js/bootstrap.min.js"></script>
    <script src="corosel/js/owl.carousel.min.js"></script>
    <script src="corosel/js/main.js"></script>
</body>
</html>
