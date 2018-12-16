<?php
  include("koneksi.php");
  $nama = $_POST['nama_suplier'];
  $alamat = $_POST['alamat_suplier'];
  $no_hp = $_POST['no_hp'];

  $qrySelectEdit = mysqli_num_rows(mysqli_query($koneksi, "select *from suplier where no_telp = '$telp'"));

  if ($nama == "" || $alamat == "" || $no_telp = "") {
    header("location:data2.php?pesan=gagal_tambah");
  }elseif($qrySelectTambah > 0){
    
  }
  else{
    $qrySuplier = "insert into suplier (nama_suplier, alamat, no_telp) values ('$nama', '$alamat', '$no_hp')";
    $eksqrySuplier = mysqli_query($koneksi, $qrySuplier);
    header("location:data2.php");
  }
?>
