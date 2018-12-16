<?php
  include("koneksi.php");
  $idDeleteSuplier = $_GET['kode_suplier'];
  $qryDeleteSuplier = mysqli_query($koneksi, "delete from suplier where id_suplier = '$idDeleteSuplier'");
  header("location:data2.php");
 ?>
