<?php
	include("koneksi.php");
	$idProduk = $_POST['kdproduk'];
	$nmProduk = $_POST['namaeditproduk'];
	$nama_file = $_FILES['fotoproduk'];
	$lokasifoto = $_FILES['fotoproduk']['tmp_name'];
	$deskripsi = addslashes($_POST['deskripsieditproduk']);
	$hrg = $_POST['hargaeditproduk'];

	if (!empty($lokasifoto)) {
		move_uploaded_file($lokasifoto, "gambarproduk/$namafoto");

		$qryEdit = "UPDATE produk SET nama_produk = '$nmProduk', deskripsi_produk = '$deskripsi', harga = '$hrg', gambar_produk = '$nama_file' where id_produk = '$idProduk'";
		$eksekusiEdit = mysqli_query($koneksi, $qryEdit);
		header("location:produk.php");
	}else{
		$qryEdit = "UPDATE produk SET nama_produk = '$nmProduk', deskripsi_produk = '$deskripsi', harga = '$hrg' where id_produk = '$idProduk'";
		$eksekusiEdit = mysqli_query($koneksi, $qryEdit);
		header("location:produk.php");
	}


 ?>
