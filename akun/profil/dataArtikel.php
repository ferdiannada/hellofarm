<?php include("../../koneksi.php");
session_start();
if ($_SESSION['status'] != "login") {
  header("location:../../index.php");
}
$idAkun = $_SESSION['id_user'];
$qryTampil = mysqli_query($koneksi, "select *from user_login where id_user = '$idAkun'");
$akun = mysqli_fetch_array($qryTampil);
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
  <link href="../../img/favicon.png" rel="icon">
  <link href="../../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../lib/animate/animate.min.css" rel="stylesheet">

  <!-- DataTables -->
  <link rel="stylesheet" href="../../admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../admin/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Main Stylesheet File -->
  <link  href="css/style.css" rel="stylesheet">
  <link  href="css/nav.css" rel="stylesheet">

  <!-- Modal -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
  <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/reset.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="../../login/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <!-- Koneksi tinyMce -->
  <script type="text/javascript" src="../../admin/pages/tables/artikel/lib/tinymce/tinymce.min.js"></script>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins : 'pagebreak, code',
      pagebreak_separator: "<!--more-->"

    });
  </script>
<!-- Akhir Koneksi -->

</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#"><img src="../../img/logo.png" alt="" title="" /></img></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="../#hero">Beranda</a></li>
          <li><a href="../#about">Tentang</a></li>
          <li><a href="../#portfolio">Fitur</a></li>
          <li><a href="../../toko/">Toko</a></li>
          <li><a href="../../artikel">Artikel</a></li>
          <li><a href="../#contact">Hubungi</a></li>
          <?php if (isset($_SESSION['status'])) { ?>
            <li class="menu-has-children"><a href="#">Selamat Datang <?php echo $_SESSION['username']; ?></a>
              <ul>

                <li><a href="akun/profil/">Data Akun</a></li>
                <li><a href="../../prosesLogout.php">Keluar</a></li>
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
        include ("../../akun/login.php");
        include ("../../akun/registrasi.php");
    ?>

  <!--==========================
    Hero Section
  ============================-->
  <main id="main" style="margin-top: 150px; padding-bottom: 100px;">
    <div class="container">

          <div class="row">    
            
            <div class="col-lg-3">

              <div class="row">
                <div class="list-group">
                    <span href="#" class="list-group-item active">
                        Profil
                    </span>
                    <a href="index.php" class="list-group-item">
                        <i class="fa fa-user"></i> Data Profil
                    </a>
                    <a href="orderAkun.php" class="list-group-item">
                        <i class="fa fa-shopping-basket"></i> Data Pemesanan
                    </a>
                    <a href="editAkun.php" class="list-group-item">
                        <i class="fa fa-cogs"></i> Setting Profil
                    </a>
                    <a href="editPassword.php" class="list-group-item">
                        <i class="fa fa-key"></i> Ganti Password
                    </a>
                    <a href="tambahArtikel.php" class="list-group-item">
                        <i class="fa fa-plus"></i> Tambah Artikel
                    </a>
                    <a href="" class="list-group-item">
                        <i class="fa fa-file-text"></i> Data Artikel
                    </a>
                </div>
              </div>
            </div>

            <!-- /.col-lg-3 -->
              <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 border-right">
                                <h4>Artikel</h4>
                            </div>
                            <div class="col-md-10">
                                <h6>Ingin menambahkan artikel anda? Silahkan klik <button type="button" class="btn btn-sm btn-primary">Tambah Artikel</button></h6>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-hover ">
                                        <thead class="bg-light ">
                                          <tr>
                                            <td>
                                                <div class="form-check-inline">
                                                  <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="">
                                                   </label>
                                               </div>
                                            </td>
                                            <th hidden>ID Artikel</th>
                                            <th>Judul Artikel</th>
                                            <th>Tanggal Pembuatan</th>
                                            <th>Status Artikel</th>
                                            <th>Menu</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                            $qryArtikel = mysqli_query($koneksi, "select *from artikel");
                                            while ($artikel = mysqli_fetch_array($qryArtikel)) {
                                           ?>
                                        <tr>                                    
                                          <td>
                                              <div class="form-check-inline">
                                                <label class="form-check-label">
                                                  <input type="checkbox" class="form-check-input" value="">
                                                 </label>
                                             </div>
                                          </td>
                                          <th hidden><?php echo $artikel['id_artikel']; ?></th>
                                          <td><?php echo $artikel['judul_artikel']; ?></td>
                                          <td><?php echo $artikel['tgl_posting']; ?></td>
                                          <td>Belum diterima atau Diterima</td> 
                                          <td>
                                              <a href="#" title="Edit Artikel"><i class="fa fa-pencil-square-o"></i></a>
                                              |
                                              <a href="#" title="Hapus Artikel"><i class="fa fa-trash"></i></a>
                                          </td>                                        </tr>
                                      <?php include("../../admin/pages/tables/artikel/modalHapus.php"); } ?>  
                                        </tbody>
                                      </table>
                            </div>
                        </div>
                    </div>
                </div>
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
  <script src="../../lib/jquery/jquery.min.js"></script>
  <script src="../../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../lib/easing/easing.min.js"></script>
  <script src="../../lib/wow/wow.min.js"></script>
  <script src="../../lib/waypoints/waypoints.min.js"></script>
  <script src="../../lib/counterup/counterup.min.js"></script>
  <script src="../../lib/superfish/hoverIntent.js"></script>
  <script src="../../lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="../../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../../js/main.js"></script>

  <!-- Modal Login -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="../../login/js/index.js"></script>

  <!-- Nav Kategori -->
  <script src="js/nav.js"></script>

  <!-- DataTables -->
  <script src="../../admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../../admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  
  <!-- SlimScroll -->
  <script src="../../admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="../../admin/bower_components/fastclick/lib/fastclick.js"></script>

  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>


<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'nBTyzovnNm';var d=document;var w=window;function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->

</body>
</html>
