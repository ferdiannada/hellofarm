<?php include("../koneksi.php");
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HelloFarm</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File Header -->
  <link href="../akun/profil/css/style.css" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/nav.css" rel="stylesheet">
  <link href="css/form-validation.css" rel="stylesheet">

  <!-- Modal -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
  <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/reset.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="../login/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
          <a href="../"><img src="../img/logo.png" alt="" title="" /></img></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="../#hero">Beranda</a></li>
          <li><a href="../#about">Tentang</a></li>
          <li><a href="../#portfolio">Fitur</a></li>
          <li class="menu-active"><a href="">Toko</a></li>
          <li><a href="../artikel">Artikel</a></li>
          <li><a href="#contact">Hubungi</a></li>
          <?php if (isset($_SESSION['status'])) { ?>
            <li class="menu-has-children"><a href="#">Selamat Datang <?php echo $_SESSION['username']; ?></a>
              <ul>

                <li><a href="../akun/profil">Data Akun</a></li>
                <li><a href="../prosesLogout.php">Keluar</a></li>
              </ul>
            </li>

          <?php }else {?>
            <li class="menu-has-children"><a href="#">Akun</a>
              <ul>
                  <li><a href="" data-toggle="modal" data-target="#nuLogin">Login</a></li>
                  <li><a href="" data-toggle="modal" data-target="#nuRegister">Register</a></li>
              </ul>
            </li>
        <?php } ?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <?php
        include("login.php");
        include("registrasi.php");
    ?>

  <!--==========================
    Hero Section
  ============================-->

  <main id="main">

        <!-- Page Content -->
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Konfirmasi pembayaran</h2>
        <p class="lead">Silahkan isi data anda sesuai dengan yang tersedia.</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4" style="margin-top: 20px;">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span></span>
            <span></span>
          </h4>
          <ul class="list-group mb-3">
              <label for="file"> Bukti pembayaran: </label>
              <input type="file" name="gambar" id="gambar" />
              <br />
          </ul>

            <div class="mb-3">
              <div class="input-group">
                <label for="metode">Metode pembayaran</label>
                <select class="custom-select d-block w-100" id="metode" required>
                  <option value="">Bank...</option>
                  <option>BRI</option>
                  <option>BCA</option>
                  <option>Mandiri</option>
                </select>
                <div class="invalid-feedback">
                  Isi metode pembayaran anda.
                </div>
              </div>
            </div>

        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Konfirmasi pembayaran</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="firstName">ID Pembayaran</label>
                <input type="number" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Isi dengan sesuai ID anda
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="firstName">Nama pemilik rekening</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Isi dengan sesuai nama pemilik rekening
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
              <div class="invalid-feedback">
                Isi alamat email yang valid.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Transfer Transfer</label>
              <input type="date" class="form-control" id="address" placeholder="84,000" required>
              <div class="invalid-feedback">
                00-00-0000
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Nilai Transfer</label>
              <input type="text" class="form-control" id="address" placeholder="84,000" required>
              <div class="invalid-feedback">
                Isi nilai transfer anda.
              </div>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Konfirmasi</button>
          </form>
        </div>
      </div>

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" style="">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Hello Farm</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">Ropan</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstr../bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/counterup/counterup.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

  <!-- Modal Login -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'nBTyzovnNm';var d=document;var w=window;function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->

</body>
</html>
