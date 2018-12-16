<?php
  include("koneksi.php");
  $idsuplier = $_POST['idsuplier'];
  $nmSuplier = $_POST['nama_suplier'];
  $alamat = $_POST['alamat_suplier'];
  $telp = $_POST['no_hp'];

  if ($nmSuplier == "" || $alamat == "" || $telp == "") {
    header("location: data2.php?pesan=edit_data_kosong");
  }
  else{
    $sqlEditSuplier = mysqli_query($koneksi, "UPDATE suplier SET nama_suplier = '$nmSuplier', alamat = '$alamat', no_telp = '$telp' where id_suplier = '$idsuplier'");
    header("location:data2.php");
  }
 ?>
