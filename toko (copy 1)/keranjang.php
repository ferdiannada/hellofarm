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

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
                <!-- Sidebar divider -->
              </div>
            </div>
          </div>

          <div class="row">

              <div class="col-sm-5 col-md-12">

                  <div class="product">
                      <div class="spec ">
                        <h3>Keranjang</h3>
                        <div class="ser-t">
                          <b></b>
                          <span><i></i></span>
                          <b class="line"></b>
                        </div>
                      </div>

                  <table class="table table-hover">
                      <thead>
                          <tr>
                              <th>Produk</th>
                              <th>Kuantitas</th>
                              <th class="text-center">Harga</th>
                              <th class="text-center">Total</th>
                              <th> </th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td class="col-sm-8 col-md-6">
                              <div class="media">
                                  <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                                  <div class="media-body">
                                      <h4 class="media-heading"><a href="#">Product name</a></h4>
                                      <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                      <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                                  </div>
                              </div></td>
                              <td class="col-sm-1 col-md-1" style="text-align: center">
                              <input type="email" class="form-control" id="exampleInputEmail1" value="3">
                              </td>
                              <td class="col-sm-1 col-md-1 text-center"><strong>$4.87</strong></td>
                              <td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>
                              <td class="col-sm-1 col-md-1">
                              <button type="button" class="btn btn-danger">
                                  <span class="fa fa-remove"></span> Remove
                              </button></td>
                          </tr>
                          <tr>
                              <td class="col-md-6">
                              <div class="media">
                                  <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                                  <div class="media-body">
                                      <h4 class="media-heading"><a href="#">Product name</a></h4>
                                      <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                      <span>Status: </span><span class="text-warning"><strong>Leaves warehouse in 2 - 3 weeks</strong></span>
                                  </div>
                              </div></td>
                              <td class="col-md-1" style="text-align: center">
                              <input type="email" class="form-control" id="exampleInputEmail1" value="2">
                              </td>
                              <td class="col-md-1 text-center"><strong>$4.99</strong></td>
                              <td class="col-md-1 text-center"><strong>$9.98</strong></td>
                              <td class="col-md-1">
                              <button type="button" class="btn btn-danger">
                                  <span class="fa fa-remove"></span> Remove
                              </button></td>
                          </tr>
                          <tr>
                              <td>   </td>
                              <td>   </td>
                              <td>   </td>
                              <td><h5>Subtotal</h5></td>
                              <td class="text-right"><h5><strong>$24.59</strong></h5></td>
                          </tr>
                          <tr>
                              <td>   </td>
                              <td>   </td>
                              <td>   </td>
                              <td><h5>Estimated shipping</h5></td>
                              <td class="text-right"><h5><strong>$6.94</strong></h5></td>
                          </tr>
                          <tr>
                              <td>   </td>
                              <td>   </td>
                              <td>   </td>
                              <td><h3>Total</h3></td>
                              <td class="text-right"><h3><strong>$31.53</strong></h3></td>
                          </tr>
                          <tr>
                              <td>   </td>
                              <td>   </td>
                              <td>   </td>
                              <td>
                              <button type="button" class="btn btn-default">
                                  <span class="fa fa-shopping-cart"></span> Continue Shopping
                              </button></td>
                              <td>
                              <button type="button" class="btn btn-success">
                                  Checkout <span class="fa fa-play"></span>
                              </button></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
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
  
</body>
</html>
