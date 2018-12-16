<?php
	include('koneksi.php');

	$namafile = $_FILES['gambarproduk']['name'];
	$file_tmp = $_FILES['gambarproduk']['tmp_name'];
	move_uploaded_file($file_tmp, 'gambarproduk/'.$namafile);
	

	$nmproduk = $_POST['nama_produk'];
	$deskripsi = addslashes($_POST['deskripsi']);
	$stok = $_POST['stok'];
	$harga = $_POST['harga'];

	$querySimpan = "insert into produk (nama_produk,  deskripsi_produk, stok, harga, gambar_produk) values ('$nmproduk', '$deskripsi', '$stok', '$harga', '$namafile')";
	$eksekusi = mysqli_query($koneksi, $querySimpan);
	header("location:produk.php");
?>
