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

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File Header -->
  <link href="../akun/profil/css/style.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/nav.css" rel="stylesheet">

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

  <main id="main" style="margin-top: 120px;">

    <!-- Page Content -->
        <div class="row">
          <div class="col-lg-3 sidebar">
            <div class="bg-white shadow">


              <div class="sidebar-menu">

                <div class="toko"><span class="fa fa-header icon"></span> Toko</div>

                <div class="sidebar-search-text">
                    <input class="form-control" placeholder="Pencarian..." type="text">
                </div>
                <!-- Sidebar navigation -->
                <ul class="nav sidebar-nav">
                  <li>
                    <a href="#">
                      <span class="fa fa-arrow-right icon"></span>
                      Obat
                    </a>
                    <a href="#">
                      <span class="fa fa-arrow-right icon"></span>
                      Pakan
                    </a>
                    <div style="margin-top: 200px;"></div>

                    <a href="#">
                      <span class="fa fa-minus icon"></span>
                      Total Harga : $6.00
                    </a>
                  </li>
                  <li style="margin-top: 10px;margin-bottom: 20px;">
                    <a href="keranjang.php">
                      <button class="lihat btn btn-danger my-cart-btn my-cart-b" data-id="24" data-name="Wheat" data-summary="summary 24" data-price="6.00" data-quantity="1" data-image="images/of24.png">Lihat Keranjang</button>
                    </a>
                  </li>
                <!-- Sidebar divider -->
              </div>
            </div>
          </div>

          <div class="col-lg-9">
            <div class="product" style="margin-top: 20px;">
                <div class="spec ">
                  <h3>Products</h3>
                  <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                  </div>
                </div>
                <?php
                  $sqlProduk = mysqli_query($koneksi, "select *from produk");
                  while ($tampil = mysqli_fetch_array($sqlProduk)) {

                 ?>
                <div class="col-md-3 pro-1">
                  <div class="col-m">
                  <a href="" data-toggle="modal" data-target="#modalDetil<?php echo $tampil['id_produk']; ?>" class="offer-img">
                      <img src="../admin/pages/tables/gambarproduk/<?php echo $tampil['gambar_produk']; ?>" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                      <div class="women">
                        <h6><?php echo $tampil['nama_produk'] ?></h6>
                      </div>
                      <div class="mid-2">
                        <p ><em class="item_price">Rp<?php echo number_format($tampil['harga']) ?></em></p>
                          <div class="block">
                          <div class="starbox small ghosting"> </div>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                        <div class="add">
                         <a href="jual.php?id=<?php echo $tampil['id_produk'] ?>" class="btn btn-danger my-cart-btn my-cart-b" data-quantity="1" data-image="images/of24.png">Tambah ke Keranjang</a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
              include("modalDetil.php");
             } ?>
              </div>
            </div>
          </div>

  </main>
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
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
  <script src="../login/js/index.js"></script>


<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'nBTyzovnNm';var d=document;var w=window;function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->

</body>
</html>
